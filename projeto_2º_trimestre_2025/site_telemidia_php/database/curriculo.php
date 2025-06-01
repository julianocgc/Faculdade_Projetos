<?php

function createCurriculoDb($conn, $nome, $sexo, $idade, $email, $cidade, $estado, $arquivo_curriculo, $comentarios) {
    $nome = mysqli_real_escape_string($conn, $nome);
    $sexo = mysqli_real_escape_string($conn, $sexo);
    $idade = mysqli_real_escape_string($conn, $idade);
    $email = mysqli_real_escape_string($conn, $email);
    $cidade = mysqli_real_escape_string($conn, $cidade);
    $estado = mysqli_real_escape_string($conn, $estado);
    $arquivo_curriculo = mysqli_real_escape_string($conn, $arquivo_curriculo);
    $comentarios = mysqli_real_escape_string($conn, $comentarios);

    if($nome && $sexo && $idade && $email && $cidade && $estado) {
        $sql = "INSERT INTO curriculos (nome, sexo, idade, email, cidade, estado, arquivo_curriculo, comentarios) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) 
            exit('SQL error');
        
        mysqli_stmt_bind_param($stmt, 'ssisssss', $nome, $sexo, $idade, $email, $cidade, $estado, $arquivo_curriculo, $comentarios);
        mysqli_stmt_execute($stmt);
        
        $insert_id = mysqli_insert_id($conn);
        mysqli_close($conn);
        return $insert_id;
    }
    return false;
}

function readCurriculosDb($conn) {
    $curriculos = [];

    $sql = "SELECT * FROM curriculos ORDER BY data_envio DESC";
    $result = mysqli_query($conn, $sql);

    $result_check = mysqli_num_rows($result);
    
    if($result_check > 0)
        $curriculos = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
    return $curriculos;
}

function findCurriculoDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
    $curriculo;

    $sql = "SELECT * FROM curriculos WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
        exit('SQL error');

    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    
    $curriculo = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

    mysqli_close($conn);
    return $curriculo;
}

function updateCurriculoStatusDb($conn, $id, $status) {
    $id = mysqli_real_escape_string($conn, $id);
    $status = mysqli_real_escape_string($conn, $status);

    if($id && $status) {
        $sql = "UPDATE curriculos SET status = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');

        mysqli_stmt_bind_param($stmt, 'si', $status, $id);
        mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        return true;
    }
    return false;
}

function deleteCurriculoDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);

    if($id) {
        $sql = "DELETE FROM curriculos WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        return true;
    }
    return false;
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateAge($idade) {
    return is_numeric($idade) && $idade > 0 && $idade <= 120;
}

function validateSexo($sexo) {
    return in_array($sexo, ['masculino', 'feminino']);
}

function validateEstado($estado) {
    $estados_validos = [
        'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 
        'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 
        'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
    ];
    return in_array(strtoupper($estado), $estados_validos);
}
