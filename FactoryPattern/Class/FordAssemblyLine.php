<?php
require_once(__ROOT__ . "/Interface/AssemblyLineInterface.php");
require_once(__ROOT__ . "/Class/FordFiesta.php");
require_once(__ROOT__ . "/Class/FordF250.php");

class FordAssemblyLine implements AssemblyLineInterface
{
    public function createCar()
    {
        return new FordFiesta();
    }

    public function createTruck()
    {
        return new FordF250();
    }
}