<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>
</head>

<body>
   
    <h1>Resultado da multiplicacao</h1>
    
    <p> 
     <?php
     //inclui o arquivo na conexão do banco de dados
     include "formconexao.php";
   
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];
    $multiplicacao = $num1 * $num2 * $num3;


     //comando sql
    $sql = "INSERT INTO soma (numero1, numero2, numero3, resultado)
    VALUES ($num1, $num2, $num3, $multiplicacao)";

    //consulta ou guardar na tabela do banco de dados
    $conexao->query($sql);

    echo "O resultado do primeiro número: $num1 * o segundo número: $num2 * o terceiro número: $num3 é: $multiplicacao";


    ?>
    </p>
   
</body>

</html>