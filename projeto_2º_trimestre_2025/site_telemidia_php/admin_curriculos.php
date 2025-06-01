<?php
// Página administrativa para visualizar currículos enviados
// ATENÇÃO: Em produção, adicione autenticação adequada!

require_once 'config.php';
require_once 'database/curriculo.php';

$curriculos = readCurriculosDb($conn);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Currículos Recebidos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .status-novo { background-color: #fff3cd; }
        .status-analisando { background-color: #d1ecf1; }
        .status-aprovado { background-color: #d4edda; }
        .status-rejeitado { background-color: #f8d7da; }
        .btn { padding: 5px 10px; margin: 2px; text-decoration: none; border-radius: 3px; }
        .btn-download { background-color: #007bff; color: white; }
        .btn-status { background-color: #28a745; color: white; }
    </style>
</head>
<body>
    <h1>Currículos Recebidos</h1>
    
    <?php if (empty($curriculos)): ?>
        <p>Nenhum currículo foi enviado ainda.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Idade</th>
                    <th>Cidade/Estado</th>
                    <th>Data Envio</th>
                    <th>Status</th>
                    <th>Arquivo</th>
                    <th>Comentários</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($curriculos as $curriculo): ?>
                    <tr class="status-<?php echo $curriculo['status']; ?>">
                        <td><?php echo $curriculo['id']; ?></td>
                        <td><?php echo htmlspecialchars($curriculo['nome']); ?></td>
                        <td><?php echo htmlspecialchars($curriculo['email']); ?></td>
                        <td><?php echo ucfirst($curriculo['sexo']); ?></td>
                        <td><?php echo $curriculo['idade']; ?></td>
                        <td><?php echo htmlspecialchars($curriculo['cidade']) . '/' . $curriculo['estado']; ?></td>
                        <td><?php echo date('d/m/Y H:i', strtotime($curriculo['data_envio'])); ?></td>
                        <td><?php echo ucfirst($curriculo['status']); ?></td>
                        <td>
                            <?php if ($curriculo['arquivo_curriculo']): ?>
                                <a href="uploads/curriculos/<?php echo $curriculo['arquivo_curriculo']; ?>" 
                                   class="btn btn-download" target="_blank">Download</a>
                            <?php else: ?>
                                Sem arquivo
                            <?php endif; ?>
                        </td>
                        <td><?php echo htmlspecialchars(substr($curriculo['comentarios'], 0, 50)) . (strlen($curriculo['comentarios']) > 50 ? '...' : ''); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    
    <br>
    <p><strong>Legenda de Status:</strong></p>
    <ul>
        <li><span class="status-novo">Novo</span> - Currículo recém enviado</li>
        <li><span class="status-analisando">Analisando</span> - Em processo de análise</li>
        <li><span class="status-aprovado">Aprovado</span> - Candidato aprovado</li>
        <li><span class="status-rejeitado">Rejeitado</span> - Candidato não aprovado</li>
    </ul>
    
    <p><a href="trabalhe_conosco.php">← Voltar para o formulário</a></p>
</body>
</html>
