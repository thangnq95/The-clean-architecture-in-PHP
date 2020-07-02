<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . "/Interface/AssemblyLineInterface.php");

class Building
{
    protected $assemblyLine;
    protected $inventory = [];

    public function __construct(
        AssemblyLineInterface $assemblyLine
    )
    {
        $this->assemblyLine = $assemblyLine;
    }

    public function createCars()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->inventory[] =
                $this->assemblyLine->createCar();
        }
    }

    public function createTrucks()
    {
        for ($i = 0; $i < 15; $i++) {
            $this->inventory[] =
                $this->assemblyLine->createTruck();
        }
    }
}
