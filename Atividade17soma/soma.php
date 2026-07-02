<?php 

include "conexaosoma.php";

$num1 = 36;
$num2 = 46;
$num3 = 19;

$resultado = $num1 + $num2 + $num3;




$sql =" INSERT INTO soma(numero1, numero2, numero3, resultado)
VALUES($num1, $num2, $num3, $resultado)";


if ($conexao->query($sql)) {
    
echo "<br> A soma dos três números foram salvo com sucesso!";
}else {
    echo "<br> Erro ao salvar";
}

?> 