<header class="orange">
    <h2>Nome da Empresa | Manage++</h2>
</header>
<nav class="orange">
    <ul>
        <?php 
            if (basename($_SERVER["PHP_SELF"]) == "index.php") {
                echo "
                    <li><a href='./'>Recarregar</a></li>
                ";
            }else{
                echo "
                    <li><a href='./home.php'>Inicio</a></li>
                    <li><a href='./'>Recarregar</a></li>
                    <li><a href='./logout.php'>Fazer logout</a></li>
                ";
            }
        ?>
    </ul>
</nav>