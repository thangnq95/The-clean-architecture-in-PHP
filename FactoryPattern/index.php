<?php
require_once "Class/Building.php";
require_once "Class/FordAssemblyLine.php";


$building = new Building(new FordAssemblyLine());
$building->createCars();

var_dump($building);

