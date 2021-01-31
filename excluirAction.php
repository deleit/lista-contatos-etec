<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "pwii";
        $conexao = new mysqli($servername, $username, $password, $dbname);

        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }

        $sql = "DELETE FROM amigo WHERE idamigo = '".$_POST['txtID']."';";
        
        if ($conexao->query($sql) === TRUE) {
            echo '
                <a href="listar.php">
                    <h1 class="w3-button w3-teal">Amigo excluído com sucesso!</h1>
                </a>
            ';
        } else {
            echo '
                <a href="listar.php">
                    <h1 class="w3-button w3-teal">ERRO!</h1>
                </a>
            ';
        }
        
        $conexao->close();
    ?>
<?php require_once ('rodape.php'); ?>