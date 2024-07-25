<?php

namespace App\Http\Controllers;

use App\Services\LampSocket;

class LightController extends Controller
{
    private LampSocket $lampSocket;

    public function __construct(LampSocket $lampSocket)
    {
        $this->lampSocket = $lampSocket;
    }

    public function turnOn(): string
    {
        return $this->lampSocket->turnOn();
    }

    public function turnOff(): string
    {
        return $this->lampSocket->turnOff();
    }
}
