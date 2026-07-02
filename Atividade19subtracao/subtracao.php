<?php 

include "conexaosubtracao.php";

$num1 = 25;
$num2 = 20;
$num3 = 12;

$resultado = $num1 - $num2 - $num3;




$sql =" INSERT INTO subtracao(numero1, numero2, numero3, resultado)
VALUES($num1, $num2, $num3, $resultado)";


if ($conexao->query($sql)) {
    
echo "<br> A subtracao dos três números foram salvo com sucesso!";
}else {
    echo "<br> Erro ao salvar";
}

?> 