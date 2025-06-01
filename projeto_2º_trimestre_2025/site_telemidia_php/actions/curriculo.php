<?php
require_once '../config.php';
require_once '../database/curriculo.php';

// Verificar se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../trabalhe_conosco.php?error=metodo_invalido');
    exit;
}

// Receber e sanitizar dados do formulário
$nome = trim($_POST['nome'] ?? '');
$sexo = $_POST['sexo'] ?? '';
$idade = $_POST['idade'] ?? '';
$email = trim($_POST['email'] ?? '');
$cidade = trim($_POST['cidade'] ?? '');
$estado = strtoupper(trim($_POST['estado'] ?? ''));
$comentarios = trim($_POST['comentarios'] ?? '');

// Array para armazenar erros de validação
$errors = [];

// Validações
if (empty($nome)) {
    $errors[] = 'Nome é obrigatório';
} elseif (strlen($nome) > 100) {
    $errors[] = 'Nome deve ter no máximo 100 caracteres';
}

if (!validateSexo($sexo)) {
    $errors[] = 'Sexo deve ser masculino ou feminino';
}

if (!validateAge($idade)) {
    $errors[] = 'Idade deve ser um número válido entre 1 e 120';
}

if (empty($email)) {
    $errors[] = 'Email é obrigatório';
} elseif (!validateEmail($email)) {
    $errors[] = 'Email deve ter um formato válido';
}

if (empty($cidade)) {
    $errors[] = 'Cidade é obrigatória';
} elseif (strlen($cidade) > 100) {
    $errors[] = 'Cidade deve ter no máximo 100 caracteres';
}

if (!validateEstado($estado)) {
    $errors[] = 'Estado deve ser uma sigla válida (ex: SP, RJ, MG)';
}

// Processar upload do arquivo
$arquivo_curriculo = null;
if (isset($_FILES['curriculo']) && $_FILES['curriculo']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = '../uploads/curriculos/';
    
    // Criar diretório se não existir
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    $file_info = pathinfo($_FILES['curriculo']['name']);
    $allowed_extensions = ['pdf', 'doc', 'docx'];
    $file_extension = strtolower($file_info['extension']);
    
    // Validar extensão do arquivo
    if (!in_array($file_extension, $allowed_extensions)) {
        $errors[] = 'Arquivo deve ser PDF, DOC ou DOCX';
    }
    
    // Validar tamanho do arquivo (máximo 5MB)
    if ($_FILES['curriculo']['size'] > 5 * 1024 * 1024) {
        $errors[] = 'Arquivo deve ter no máximo 5MB';
    }
    
    if (empty($errors)) {
        // Gerar nome único para o arquivo
        $arquivo_curriculo = date('Y-m-d_H-i-s') . '_' . uniqid() . '.' . $file_extension;
        $upload_path = $upload_dir . $arquivo_curriculo;
        
        if (!move_uploaded_file($_FILES['curriculo']['tmp_name'], $upload_path)) {
            $errors[] = 'Erro ao fazer upload do arquivo';
            $arquivo_curriculo = null;
        }
    }
} elseif (isset($_FILES['curriculo']) && $_FILES['curriculo']['error'] !== UPLOAD_ERR_NO_FILE) {
    // Tratar outros erros de upload
    switch ($_FILES['curriculo']['error']) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            $errors[] = 'Arquivo muito grande';
            break;
        case UPLOAD_ERR_PARTIAL:
            $errors[] = 'Upload incompleto';
            break;
        default:
            $errors[] = 'Erro no upload do arquivo';
    }
}

// Se houver erros, redirecionar de volta com mensagens de erro
if (!empty($errors)) {
    $error_message = implode(', ', $errors);
    header('Location: ../trabalhe_conosco.php?error=' . urlencode($error_message));
    exit;
}

// Tentar salvar no banco de dados
try {
    $curriculo_id = createCurriculoDb($conn, $nome, $sexo, $idade, $email, $cidade, $estado, $arquivo_curriculo, $comentarios);
    
    if ($curriculo_id) {
        // Sucesso - redirecionar com mensagem de sucesso
        header('Location: ../trabalhe_conosco.php?success=curriculo_enviado');
    } else {
        // Erro ao salvar - remover arquivo se foi feito upload
        if ($arquivo_curriculo && file_exists($upload_dir . $arquivo_curriculo)) {
            unlink($upload_dir . $arquivo_curriculo);
        }
        header('Location: ../trabalhe_conosco.php?error=erro_salvar');
    }
} catch (Exception $e) {
    // Erro na conexão/query - remover arquivo se foi feito upload
    if ($arquivo_curriculo && file_exists($upload_dir . $arquivo_curriculo)) {
        unlink($upload_dir . $arquivo_curriculo);
    }
    header('Location: ../trabalhe_conosco.php?error=erro_banco');
}

exit;
