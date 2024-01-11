<?php
session_start();

$db = new PDO("sqlite:data/login.db");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $stmt = $db->prepare("SELECT * FROM USER WHERE EM_USER = :email AND PW_USER = :pass");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $password);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row["EM_USER"] === $email && $row["PW_USER"] === $password) {
        $_SESSION["NAME"] = $row["NM_USER"];
        header("Location: home.php");
        exit();
    } else {
        // Credenciais inválidas
        $errorMessage = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Manage++</title>
</head>

<body>
    <div id="wrapper">
        <?php include "./masterpage.php"; ?>
        <main id="login">
            <form method="POST" action="./" autocomplete="off">
                <label>Insira seu email: <input type="email" id="email" name="email" placeholder="user@enteprise.com"
                        class="orange" required /></label>
                <label>Insira sua senha: <input type="password" id="pass" name="pass" placeholder="12345678"
                        class="orange" required /></label> <br />
                <button type="submit" class="orange">Entrar</button>
                <?php echo $errorMessage; ?>
            </form>
            <button onclick="toggleColor();" id="changeTheme" class="orange">Trocar tema</button>
        </main>
    </div>
</body>

</html>