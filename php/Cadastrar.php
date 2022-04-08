<?php
require 'Carros.php';
session_start();
$carrosVetor = $_SESSION["carros"] ?? [];
$carrosVetor[] = Carros::fromArray($_GET);
$_SESSION["carros"] = $carrosVetor;
header('location: ../index.php');
die();