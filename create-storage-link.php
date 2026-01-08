<?php
/**
 * ARQUIVO TEMPORÁRIO - DELETE APÓS USAR!
 * 
 * Este arquivo cria o link simbólico do storage em produção
 * quando você não tem acesso SSH.
 * 
 * Como usar:
 * 1. Faça upload deste arquivo para a raiz do projeto
 * 2. Acesse via navegador: https://seusite.com.br/create-storage-link.php
 * 3. DELETE este arquivo após usar!
 */

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "<!DOCTYPE html>
<html>
<head>
    <title>Criar Link do Storage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #f5c6cb;
        }
        .warning {
            background: #fff3cd;
            color: #856404;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ffeaa7;
            margin-top: 20px;
        }
    </style>
</head>
<body>";

try {
    $status = $kernel->call('storage:link');

    if ($status === 0) {
        echo "<div class='success'>
            <h2>✅ Sucesso!</h2>
            <p>O link simbólico do storage foi criado com sucesso.</p>
            <p>Suas imagens agora devem aparecer corretamente.</p>
        </div>";
    } else {
        echo "<div class='error'>
            <h2>❌ Erro</h2>
            <p>Não foi possível criar o link simbólico.</p>
            <p>Verifique as permissões da pasta public/</p>
        </div>";
    }
} catch (Exception $e) {
    echo "<div class='error'>
        <h2>❌ Erro</h2>
        <p>Ocorreu um erro: " . htmlspecialchars($e->getMessage()) . "</p>
    </div>";
}

echo "<div class='warning'>
    <h3>⚠️ IMPORTANTE</h3>
    <p><strong>DELETE este arquivo (create-storage-link.php) IMEDIATAMENTE!</strong></p>
    <p>Este arquivo é apenas para uso temporário e não deve permanecer no servidor.</p>
</div>

</body>
</html>";
