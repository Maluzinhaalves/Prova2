<?php
    include('conexao.php');
    $id = $_GET['id'];
    

    echo "<h1>Excluir dados</h1>";

    $sql = "delete from fluxo_caixa where id = '$id'";
    $result = mysqli_query($con, $sql);
    echo $sql ."<br>";
    
    if($result){
    echo "Sucesso ao excluir dados 😊 <br>";
    }else{
    echo "Falha ao excluir dados 😢".mysqli_error($con)."!";
    }
?>
<a href="index.php">Retornar</a>