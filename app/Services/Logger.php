<?php

namespace App\Services;

class Logger
{
    private int $logCount = 0;

    public function log($message): void
    {
        $this->logCount++;
        echo "Log #{$this->logCount}: $message \n";
    }

    public function getLogCount(): int
    {
        return $this->logCount;
    }
}
