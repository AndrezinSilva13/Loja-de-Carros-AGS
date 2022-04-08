<?php

require 'Carros.php';

function buscarID($carrosVetor,$id)
{
    foreach($carrosVetor as $indice => $valor)
    {
        $carro = $carrosVetor[$indice];
        if($carro->getID() == $id){        
            return $indice;
        }
    }
    return null;
}

session_start();

$carrosVetor = $_SESSION["carros"] ?? [];
$id = $_GET["id"] ?? -1;
$indice = buscarID($carrosVetor, $id);

if(isset($indice)){
    unset($carrosVetor[$indice]);
}

$_SESSION["carros"] = $carrosVetor;

header('location: /index.php');
die();