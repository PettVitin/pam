<?php
$tabuada = $_REQUEST["tabuada"];

if ($tabuada <=0 || $tabuada >= 50 ){
    echo "Valor invalido para a tabuada";
    exit;
}

$arrayJson = array ();
$arrayJson["tabuada"] = $tabuada;

for($contador = 0; $contador <=10; $contador++){
    $arrayJson[$tabuada . "x" . $contador] = $tabuada * $contador;
}

echo json_decode($arrayJson);
?>