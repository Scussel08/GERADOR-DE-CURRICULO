<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Gerador de Currículos</h1>
        <form method="POST" action="php/gerar.php">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>Data de Nascimento:</label>
            <input type="date" id="dataNascimento" name="dataNascimento" required onchange="calcularIdade()">

            <label>Idade:</label>
            <input type="text" id="idade" readonly>

            <label>Email:</label>
            <input type="email" name="email" required>

            <div id="experiencias">
                <label>Experiências Profissionais:</label>
                <input type="text" name="experiencias[]" placeholder="Descrição da experiência">
            </div>
            <button type="button" id="addExp">+ Adicionar Experiência</button>

            <button type="submit">Gerar Currículo</button>
        </form>
    </div>
</body>
</html>
