<?php
    include('header.php');
    @require('conectar.php');
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    try{
        $cons = $conx->prepare("SELECT * from $db.$tb where id = ?");
        $cons->bindParam(1, $id );
        if ($cons->execute()) {
            $linha_array = $cons->fetch(PDO::FETCH_ASSOC);
            if($linha_array != null){ 
            echo"<table>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>DATA</th>
                    </tr>";
            echo "<tr>";
            echo "<td>".$linha_array['id']."</td>"; 
            echo "<td>".$linha_array['nome']."</td>"; 
            echo "<td>".$linha_array['email']."</td>"; 
            echo "<td>".$linha_array['data']."</td>";
            echo "</tr>";
            echo "</table>";
            }
            else{
                $msgErr="Não foi encontrado.";
            }
        }
        else {
            $msgErr="Não foi possível executar. - " . $e->getMessage();
        }
?>
    <p id="msgErr"><?= $msgErr ?></p>
    <p><button onclick="javascript:history.back()">Consultar Novamente</button></p>
    <p><button onclick="javascript:window.location='listar.php'">Voltar</button></p>
<?php  
    }
    catch (PDOException $e) {
          $msgErr = "Falha na Consulta. - " . $e->getMessage();
    }
    $conx = null;
    include('footer.php');
?>
            