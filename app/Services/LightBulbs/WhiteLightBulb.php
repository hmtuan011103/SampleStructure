<?php

namespace App\Services\LightBulbs;


use App\Interfaces\LightBulbs\LightBulbInterface;

class WhiteLightBulb implements LightBulbInterface
{
    public function turnOn(): string
    {
        return "White light is on";
    }

    public function turnOff(): string
    {
        return "White light is off";
    }
}
