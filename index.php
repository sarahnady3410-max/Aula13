<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do aluno</title>
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
    <h1>Cadastro do aluno</h1>
    <form action="inserir.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        <label for="idade">idade: </label>
        <input type="number" name="idade" id="idade" min="0" max="110" required>
        <br><br>
        <input type="submit" value="enviar">
    </form>
</body>

</html>