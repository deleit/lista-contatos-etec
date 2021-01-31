<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
<body>
    <div>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "pwii";
            $conexao = new MYSQLI($servername, $username, $password, $dbname);

            if ($conexao->connect_error) {
                die("Connecton failed: " . $conexao->connect_error);
            }

            echo '
                <div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
                    <h1 class="w3-center w3-teal w3-round-large w3-margin">Listagem de Amigos</h1>
                    <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-teal">
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Email</th>
                            <th>Excluir</th>
                            <th>Atualziar</th>
                        </tr>
                    <thead>
            ';

            $sql = "SELECT * FROM amigo";
            $resultado = $conexao->query($sql);
            
            if($resultado != null)
                foreach($resultado as $linha) {
                    echo '<tr>';
                        echo '<td>'.$linha['idamigo'].'</td>';
                        echo '<td>'.$linha['nome'].'</td>';
                        echo '<td>'.$linha['apelido'].'</td>';
                        echo '<td>'.$linha['email'].'</td>';
                        echo '<td><a href="excluir.php?id='.$linha['idamigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'"><i class="fa fa-user-times w3-large w3-text-teal"></i> </a></td></td>';
                        echo '<td><a href="atualizar.php?id='.$linha['idamigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'"><i class="fa fa-refresh w3-large w3-text-teal"></i></a></td></td>';
                    echo '</tr>';
                }
            echo '</table>
            </div>';
            $conexao->close();
        ?>
    </div>
<?php require_once ('rodape.php'); ?>