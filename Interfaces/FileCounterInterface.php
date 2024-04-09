<?php

namespace App\Interfaces;

interface FileCounterInterface
{
    public function countFiles(string $directory): array;
}