<?php
include "banco.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Erro: ID não informado.");
}

$id = (int)$_GET['id'];

$sql = "SELECT * FROM alunos WHERE id = $id";

$resultado = $conexao->query($sql);

if ($resultado->num_rows == 0) {
    die("Aluno não encontrado.");
}

$cliente = $resultado->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <form action="./atualizar_clientes.php" method="POST">

        <h1>Atualizar Dados</h1>

        <div class="mb-3">
    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php  echo $cliente['id'];?>">  
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" value="<?php  echo $cliente['nome'];?>">  
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Idade</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="idade" value="<?php  echo $cliente['idade'];?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Curso</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="curso" value="<?php  echo $cliente['curso'];?>">
  </div>

 

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="cidade" value="<?php  echo $cliente['cidade'];?>">
  </div>



  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>