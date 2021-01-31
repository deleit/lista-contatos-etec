<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
<body>
    <a href="index.php" class="w3-display-topmiddle w3-red w3-center w3-padding w3-button" style="text-decoration: none;">
        <i class="fa fa-ban" style="font-size:5em"></i>
        <p style="font-weight: bold;">CANCELAR ATUALIZAÇÃO</p>
    </a>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
        <h1 class="w3-center w3-teal w3-round-large w3-margin">ATUALIZAR - ID: <?php echo" ".$_GET['id']?></h1>
        <form action="atualizarAction.php" class="w3-container w" method="post">
            <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
            <br>
            <label class="w3-text-teal" style="font-weight: bold;">Nome</label>
            <input name="txtNome" class="w3-input w3-border w3-light-grey" value="<?php echo $_GET['nome']?>">
            <br>
            <label class="w3-text-teal" style="font-weight: bold;">Apelido</label>
            <input name="txtApelido" class="w3-input w3-border w3-light-grey" value="<?php echo $_GET['apelido']?>">
            <br>
            <label class="w3-text-teal" style="font-weight: bold;">E-mail</label>
            <input name="txtEmail" class="w3-input w3-border w3-light-grey" value="<?php echo $_GET['email']?>">
            <br>
            <button name="btnAtualizar" class="w3-button w3-teal w3-cell w3-round-large w3-right">
                <i class="w3-xxlarge fa fa-check"></i> Confirmar Atualização
            </button>
        </form>
    </div>
<?php require_once ('rodape.php'); ?>