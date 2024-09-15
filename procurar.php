<?php
    include('header.php');
?>
 <div class="container">
        <form name="form1" id="form1" action="consultar.php" method="POST">
            <h1>Cadastro de Clientes</h1>
            <h2>Qual ID deseja encontrar?</h2>
            <p id="msgErr"><?= $msgErr ?></p>
            <p>
                <label id="l1">Número: </label>
                <input type="number" name="id" id="a1" placeholder="ex: 1" min=1><p><span id="mens1"></span></p>
            </p>
                <input type="submit" name="consultar" value="Consultar" id="a2">
        </form>
        <button onclick="javascript:history.back()">Voltar</button>
 </div>
<?php
    include('footer.php');
?>