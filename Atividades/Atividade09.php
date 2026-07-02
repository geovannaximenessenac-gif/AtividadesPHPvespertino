<?php 

$aprovados = 0;
$candidatos = [

(object)["nome"=> "Geovanna", "nota" => 50 ],
(object)["nome"=> "Manuela", "nota" => 100],
(object)["nome"=> "Ana Clara", "nota" => 90],
(object)["nome"=> "Vitoria", "nota" => 70]

];

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >=80) {
        
    $aprovados++;
    }
}
echo "O total de aprovados é: $aprovados";

?>