<?php
    @require('conectar.php');
    $id = $_GET['varid'];
    $_SESSION['sid']= $id;
    $result = $conx->query("SELECT * FROM $db.$tb WHERE id=$id");
    $linha_array = $result->fetch(PDO::FETCH_ASSOC);
    include('header.php');
?>
    <div class="container">
        <form name="form1" id="form1" action="alterar.php" onsubmit="return validar()" method="POST">
            <h1>Cadastro de Clientes</h1>
            <h2>Alterar Cliente</h2>
            <p id="msgErr"><?= $msgErr ?></p>
            <p>
                <label id="l1">Nome: </label>
                <input type="text" name="nome" id="a1" value="<?=$linha_array['nome']?>"><p><span id="mens1"></span></p>
            </p>
            <p>
                <label id="l1">Email: </label>
                <input type="email" name="email" id="a1" value="<?=$linha_array['email']?>"><p><span id="mens2"></span></p>
            </p>
                <input type="submit" name="atualizar" value="Atualizar" id="a2">
        </form>
        <button onclick="javascript:history.back()">Voltar</button>
    </div>
<?php
    $conx = null;
    include('footer.php')
?>