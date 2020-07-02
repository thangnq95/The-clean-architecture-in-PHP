<?php
require_once(__ROOT__ . "/Interface/AssemblyLineInterface.php");

class ChevyAssemblyLine implements AssemblyLineInterface {
    public function createCar() {
        return new ChevyMalibu();
    }
    public function createTruck() {
        return new ChevySilverado();
    }
}
