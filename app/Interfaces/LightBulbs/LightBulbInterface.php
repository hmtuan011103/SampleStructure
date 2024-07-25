<?php

namespace App\Interfaces\LightBulbs;

interface LightBulbInterface
{
    public function turnOn(): string;
    public function turnOff(): string;
}
