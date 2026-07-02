<?php 

include "conexaomultiplicacao.php";

$num1 = 15;
$num2 = 15;
$num3 = 15;

$resultado = $num1 * $num2 * $num3;




$sql =" INSERT INTO multiplicacao(numero1, numero2, numero3, resultado)
VALUES($num1, $num2, $num3, $resultado)";


if ($conexao->query($sql)) {
    
echo "<br> A multiplicacao dos três números foram salvo com sucesso!";
}else {
    echo "<br> Erro ao salvar";
}

?> 