<?php
    include('header.php');
?>
    <div id="anima">
        <img class="slide" src="imagens/imagem1.png">
        <img class="slide" src="imagens/imagem2.png">
        <img class="slide" src="imagens/imagem3.png">
        <img class="slide" src="imagens/imagem4.png">
    </div>
    <div class="container">
        <form name="form1" id="form1" action="inserir.php" onsubmit="return validar()" method="POST">
            <h1>Cadastro de Clientes</h1>
            <h2>Novo Cliente</h2>
            <p id="msgErr"><?= $msgErr ?></p>
            <p>
                <label id="l1">Nome: </label>
                <input type="text" name="nome" id="a1" placeholder="ex: Marcos Barbosa"><p><span id="mens1"></span></p>
            </p>
            <p>
                <label id="l1">Email: </label>
                <input type="email" name="email" id="a1" placeholder="ex: marcos@gmail.com"><p><span id="mens2"></span></p>
            </p>
                <input type="submit" name="Cadastrar" value="Cadastrar" id="a2">
        </form>
        <button onclick="javascript:window.location='listar.php'">Listar</button>
    </div>
<?php
    include('footer.php')
?>