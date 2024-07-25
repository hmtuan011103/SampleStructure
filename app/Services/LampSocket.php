<?php

namespace App\Services;

use App\Interfaces\LightBulbs\LightBulbInterface;

class LampSocket
{
    private LightBulbInterface $lightBulb;

    public function __construct(LightBulbInterface $lightBulb)
    {
        $this->lightBulb = $lightBulb;
    }

    public function turnOn(): string
    {
        return $this->lightBulb->turnOn();
    }

    public function turnOff(): string
    {
        return $this->lightBulb->turnOff();
    }
}

