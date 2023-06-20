<?php
  include('conexao.php');
    
    
  
$id = $_POST['id'];
$data= $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$his = $_POST['historico'];
$cheque = $_POST['cheque'];
    
    
echo "<h1>Altera dados</h1>";
$sql = "update fluxo_caixa set  data = '$data', tipo = '$tipo', valor = '$valor', historico = '$his', cheque = '$cheque' where id = '$id'";
echo $sql ."<br>";
$result = mysqli_query($con, $sql);
if($result){
echo "Sucesso ao alterar dados❤️ <br>";
}else{
echo "Erro ao alterar dados💔".mysqli_error($con)."!";
}
?>
<a href="index.php">Voltar</a>