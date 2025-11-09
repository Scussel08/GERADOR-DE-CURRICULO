<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['dataNascimento'];
    $experiencias = $_POST['experiencias'] ?? [];

    echo "<h1>Currículo de $nome</h1>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data</p>";
    echo "<h2>Experiências Profissionais</h2>";
    foreach ($experiencias as $exp) {
        echo "<p>- $exp</p>";
    }
    echo "<script>window.print();</script>";
}
?>
