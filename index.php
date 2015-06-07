<?php
    try{
        $conexao = new \PDO("mysql:host=localhost;dbname=phppdo", 'atrat364_atrat', '!O!$*}WR!Tbk');
        $query="select * from alunos;";
        
        //uma alternativa
//         foreach ($conexao->query($query) as $teste){
//             echo $teste['teste_descricao']."<br>";
//         }
        //outra alternativa
        $stmt = $conexao->query($query);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h1 align="center"> Rela��o de alunos e suas respectivas notas</h1>
<table border="1" width="50%" align="center">
<tr>
<td >C�digo</td>
<td>Nome</td>
<td>Nota</td>
</tr>
<thead>
</thead>
<tbody>
   <?php 
 foreach ($resultado as $resultadoView){
?>  
<tr>
   
        <td><?php echo $resultadoView['id'];?></td>
        <td><?php echo $resultadoView['nome'];?></td>
        <td><?php echo $resultadoView['nota'];?></td>

    </tr>
<?php 
 }
?>
</tbody>
</table>

<br><br>
<?php 
$query="select * from alunos order by nota desc limit 3;";
$stmt = $conexao->query($query);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h1 align="center"> Rela��o de alunos com as tr�s melhores notas</h1>
<table border="1" width="50%" align="center">
<tr>
<td >C�digo</td>
<td>Nome</td>
<td>Nota</td>
</tr>
<thead>
</thead>
<tbody>
   <?php 
 foreach ($resultado as $resultadoView){
?>  
<tr>
   
        <td><?php echo $resultadoView['id'];?></td>
        <td><?php echo $resultadoView['nome'];?></td>
        <td><?php echo $resultadoView['nota'];?></td>

    </tr>
<?php 
 }
?>
</tbody>
</table>




<?php 
       
            
       
    }catch (\PDOException $e){
        echo "N�o foi poss�vel estabelecer a conex�o com o banco de dados. ";    
    }
?>