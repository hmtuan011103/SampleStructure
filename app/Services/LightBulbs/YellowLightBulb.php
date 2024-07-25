<?php

namespace App\Services\LightBulbs;


use App\Interfaces\LightBulbs\LightBulbInterface;

class YellowLightBulb implements LightBulbInterface
{
    public function turnOn(): string
    {
        return "Yellow light is on";
    }

    public function turnOff(): string
    {
        return "Yellow light is off";
    }
}
