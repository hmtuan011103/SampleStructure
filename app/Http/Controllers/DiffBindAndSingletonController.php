<?php

namespace App\Http\Controllers;

class DiffBindAndSingletonController extends Controller
{
    public function __invoke()
    {
        // Sử dụng bind
        echo "Using Bind </br>";
        $logger1 = app('logger');
        $logger1->log('First log');
        $logger1->log('Second log');

        $logger2 = app('logger');
        $logger2->log('Third log');

        echo "</br>";
        echo "Logger 1 count: " . $logger1->getLogCount() . "</br>";
        echo "Logger 2 count: " . $logger2->getLogCount() . "</br>";

        // Sử dụng singleton
        echo "</br>";
        echo "Using Singleton  </br>";
        $sLogger1 = app('singleton-logger');
        $sLogger1->log('First singleton log');
        $sLogger1->log('Second singleton log');

        $sLogger2 = app('singleton-logger');
        $sLogger2->log('Third singleton log');

        echo "</br>";
        echo "Singleton Logger 1 count: " . $sLogger1->getLogCount() . "</br>";
        echo "Singleton Logger 2 count: " . $sLogger2->getLogCount() . "</br>";
    }
}


