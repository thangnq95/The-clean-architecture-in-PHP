<?php

class WalkingDistance implements DistanceInterface
{
    public function getDistance($from, $to)
    {
        $api = new GoogleMapsApi();
        $directions = $api->getWalkingDirections($from, $to);
        return $directions->getTotalDistance();
    }
}