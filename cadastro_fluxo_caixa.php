<?php
    include("conexao.php");
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $his = $_POST['historico'];
    $cheque = $_POST['cheque'];
    
    
    $sql = "insert into fluxo_caixa(data, tipo, valor, historico, cheque)";
    $sql .= "values ('".$data."', '".$tipo."','".$valor."','".$his."', '".$cheque."');";
    echo $sql. "<br>";
    $result = mysqli_query($con,$sql);
    
    if($result)
    echo "Sucesso ao cadastrar dados❤️";
    else 
    echo "Erro ao cadastrar dados💔";
    echo " <br><a href='index.php'>Voltar</a>"
?>