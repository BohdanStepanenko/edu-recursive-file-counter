<?php

namespace App\Classes;

use App\Interfaces\FileCounterInterface;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class FileCounter implements FileCounterInterface
{
    public function countFiles(string $directory): array
    {
        $fileCounts = [];

        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $fileName = $file->getFilename();
                if (!isset($fileCounts[$fileName])) {
                    $fileCounts[$fileName] = 1;
                } else {
                    $fileCounts[$fileName]++;
                }
            }
        }

        return $fileCounts;
    }
}