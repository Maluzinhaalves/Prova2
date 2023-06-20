<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova 2</title>
    </head>
<body>
    
    
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    
    <h1>Consulta ao fluxo de caixa</h1>
    <table align="center" border="2" widht="500" bordercolor="purple" bgcolor="pink">

        
    <thead>
    <tr>
    
    <th>código</th>
    <th>data</th>
    <th>tipo</th>
    <th>valor</th>
    <th>historico</th>
    <th>Cheque</th>
    <th>alterar</th>
    <th>excluir</th>
    </tr>
    </thead>
        
        
    <?php
    do{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['data']."</td>";
    echo "<td>".$row['historico']."</td>";
    echo "<td>".$row['tipo']."</td>";
    echo "<td>".$row['valor']."</td>";
    echo "<td>".$row['cheque']."</td>";

    echo "<td> <a href='altera_fluxo_caixa.php?id=".$row["id"]."'>alterar</a> </td>";
    echo "<td><a href='excluir_fluxo_caixa.php?id=".$row["id"]."'>excluir</a></td>";
    echo"</tr>";
            
}while($row = mysqli_fetch_array($result))
?>
        <tfooter>
        <tr>
        <td colspan="8">
        <a href="index.php" class="back">Retornar</a>
        </td>
        </tr> 
        </tfooter>
        </table>
</body>
</html>