<?php  
   include('header.php');
   @require('conectar.php');
   try { 
      $sel = "SELECT * FROM $db.$tb ORDER BY id ASC"; 
      $result = $conx->query($sel); 
      echo"<table>
            <tr>
               <th>ID</th>
               <th>NOME</th>
               <th>EMAIL</th>
               <th>DATA</th>
               <th>OPERACOES</th>
            </tr>"; 
      while ($linha_array = $result->fetch(PDO::FETCH_ASSOC)) {
?>    
   <tr>
      <td><?= $linha_array['id']; ?></td>
      <td><?= $linha_array['nome']; ?></td>
      <td><?= $linha_array['email']; ?></td>
      <td><?= $linha_array['data']; ?></td>
      <td><a href="editar.php?varid=<?=$linha_array['id']?>">Editar</a>
          <a href="#" onclick="verificar(<?=$linha_array['id']?>)">Excluir</a></td>
      </tr>
<?php }
      echo "</table>";
   }
   catch (PDOException $e) {
      echo "Consulta falha <br />" . $e->getMessage();	
   }
   $conx = null;
?>
   <p><button onclick="javascript:window.location='index.php'">Cadastrar</button>
   <p><button onclick="javascript:window.location='procurar.php'">Consultar</button>
<?php
   include('footer.php');
?>