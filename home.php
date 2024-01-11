<?php
session_start();

if (!isset($_SESSION["NAME"])) {
    header("Location: ./");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>Manage++ | Bem vindo</title>
</head>

<body>
    <div id="wrapper">
        <?php include "./masterpage.php" ?>
        <main class="default-main">
            <h1>Bem vindo,
                <?php echo $_SESSION["NAME"] ?>.
            </h1>
            <br />
            <div class="choices">
                <h3>Informações dos Funcionários</h3>
                <div class="choices-control">
                    <button class="orange choices-button">Cadastrar/Remover Funcionários</button>
                    <button class="orange choices-button">Controle de Acesso</button>
                    <button class="orange choices-button">Gestão de Jornada</button>
                    <button class="orange choices-button">Remuneração, Benefícios</button>
                    <button class="orange choices-button">Desempenho</button>
                </div> <br />
                <h3>Gestão da Empresa</h3>
                <div class="choices-control">
                    <button class="orange choices-button">Novo/Remover Departamento</button>
                    <button class="orange choices-button">Arquivo de transações financeiras</button>
                    <button class="orange choices-button">Treinamento</button>
                    <button class="orange choices-button">Monitoramento de campanhas de Marketing</button>
                </div> <br />
                <h3>Configurações do Sistema</h3>
                <div class="choices-control">
                    <button class="orange choices-button">Sobre</button>
                </div>
        </main>
        <button onclick="toggleColor();" id="changeTheme" class="orange">Trocar tema</button>
    </div>
</body>

</html>