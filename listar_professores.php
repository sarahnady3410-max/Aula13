<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar professores</title>
</head>
<body>
     <a href="listar_professores.php">listar professores</a>
     <a href="inserir.php">inserir</a>
     <a href="inserir_turnos.php">inserir turnos</a>
     <a href="inserir_professores.php">inserir professores</a>
     <a href="cadastrar_turnos.php">cadastrar turnos</a>
     <a href="cadastrar_professores.php">cadastrar professores</a>
    <a href="index.php">Cadastrar Alunos</a>
    <a href="listar_alunos.php">Listar Alunos</a>
    <br>
    <h1>Professores Cadastrados</h1>
    <?php 
    include 'conecta.php';
    $sql = "SELECT * FROM professores";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado)> 0){
        echo "<table>";
        echo "<tr> <td> ID </td> <td> nome </td> <td> disciplinas </td> </tr>";
      while ($linha = mysqli_fetch_array($resultado)) {
        echo "<tr> <td> " . $linha['id']. "</td>".
         "<td> " . $linha['nome']. "</td>".
         "<td> ". $linha['disciplinas']. "</td> </tr>";
      } echo "</table>"; 
    }else{
        echo "nenhum resultado encontrado.";
    }
    ?>
</body>
</html>