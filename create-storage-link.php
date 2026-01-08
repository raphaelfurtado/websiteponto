<?php
/**
 * ARQUIVO TEMPORÁRIO - DELETE APÓS USAR!
 * 
 * Este arquivo configura o storage em produção quando você não tem acesso SSH.
 * 
 * Como usar:
 * 1. Faça upload deste arquivo para a RAIZ do projeto (onde está o index.php)
 * 2. Acesse via navegador: https://websiteponto.com.br/create-storage-link.php
 * 3. DELETE este arquivo após usar!
 */

// Prevenir acesso direto em produção após configuração
if (file_exists(__DIR__ . '/public/storage') && is_link(__DIR__ . '/public/storage')) {
    die('Storage já configurado! DELETE este arquivo.');
}

echo "<!DOCTYPE html>
<html>
<head>
    <title>Configurar Storage</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .step {
            background: white;
            padding: 20px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid #3490dc;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
            margin: 10px 0;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #f5c6cb;
            margin: 10px 0;
        }
        .warning {
            background: #fff3cd;
            color: #856404;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ffeaa7;
            margin: 20px 0;
        }
        code {
            background: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>🔧 Configuração do Storage</h1>";

$errors = [];
$success = [];

// Passo 1: Criar diretórios
echo "<div class='step'><h3>Passo 1: Criando estrutura de pastas</h3>";

$directories = [
    'storage/app/public',
    'storage/app/public/projects',
    'storage/app/public/projects/gallery',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
];

foreach ($directories as $dir) {
    $fullPath = __DIR__ . '/' . $dir;
    if (!is_dir($fullPath)) {
        if (@mkdir($fullPath, 0755, true)) {
            $success[] = "✅ Criado: <code>$dir</code>";
        } else {
            $errors[] = "❌ Erro ao criar: <code>$dir</code>";
        }
    } else {
        $success[] = "✓ Já existe: <code>$dir</code>";
    }
}

foreach ($success as $msg) {
    echo "<div class='success'>$msg</div>";
}
foreach ($errors as $msg) {
    echo "<div class='error'>$msg</div>";
}

echo "</div>";

// Passo 2: Criar link simbólico
echo "<div class='step'><h3>Passo 2: Criando link simbólico</h3>";

$target = __DIR__ . '/storage/app/public';
$link = __DIR__ . '/public/storage';

if (file_exists($link)) {
    if (is_link($link)) {
        echo "<div class='success'>✅ Link simbólico já existe!</div>";
    } else {
        echo "<div class='error'>❌ Existe um arquivo/pasta chamado 'storage' em public/. Renomeie ou delete manualmente.</div>";
    }
} else {
    if (@symlink($target, $link)) {
        echo "<div class='success'>✅ Link simbólico criado com sucesso!</div>";
    } else {
        echo "<div class='error'>❌ Erro ao criar link simbólico. Verifique permissões.</div>";
    }
}

echo "</div>";

// Passo 3: Verificar
echo "<div class='step'><h3>Passo 3: Verificação</h3>";

if (is_link($link) && is_dir($target)) {
    echo "<div class='success'>
        <h4>✅ Configuração concluída!</h4>
        <p>O storage está configurado corretamente.</p>
        <p>Teste acessando: <a href='/storage/' target='_blank'>https://websiteponto.com.br/storage/</a></p>
    </div>";
} else {
    echo "<div class='error'>
        <h4>❌ Configuração incompleta</h4>
        <p>Algo deu errado. Verifique as mensagens acima.</p>
    </div>";
}

echo "</div>";

echo "<div class='warning'>
    <h3>⚠️ IMPORTANTE - LEIA COM ATENÇÃO!</h3>
    <ol>
        <li><strong>DELETE este arquivo (create-storage-link.php) IMEDIATAMENTE!</strong></li>
        <li>Este arquivo não deve permanecer no servidor por questões de segurança.</li>
        <li>Você pode deletá-lo via FTP ou cPanel File Manager.</li>
    </ol>
</div>

</body>
</html>";
