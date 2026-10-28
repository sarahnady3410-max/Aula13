<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserir turnos</title>
</head>
<body>
    
     <a href="listar_professores.php">listar professores</a>
     <a href="cadastrar_turnos.php">cadastrar turnos</a>
     <a href="cadastrar_professores.php">cadastrar professores</a>
    <a href="index.php">Cadastrar Alunos</a>
    <a href="listar_alunos.php">Listar Alunos</a>
    <br>
     <?php
    // if (!isset($_POST['nome'])) {
    //     header("Location: cad_turnos.php");
    //     exit;
    // }
    $nome = $_POST['nome'];
    $sql = "insert into turnos (nome) values ('$nome')";
    include 'conecta.php';
    if (mysqli_query($conexao, $sql)) {
        echo  "Dados Inseridos";  
    }else{
        echo "erro inserir dados";
    }

    ?>
</body>
</html>