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

        $sql = "UPDATE amigo 
            SET 
                nome = '".$_POST['txtNome']."', 
                apelido = '".$_POST['txtApelido']."',
                email = '".$_POST['txtEmail']."'
            WHERE 
                idamigo = '".$_POST['txtID']."';
            ";
        
        if ($conexao->query($sql) === TRUE) {
            echo '
                <a href="listar.php">
                    <h1 class="w3-button w3-teal">Amigo atualizado com sucesso!</h1>
                </a>
            ';
            $id = mysqli_insert_id($conexao);

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