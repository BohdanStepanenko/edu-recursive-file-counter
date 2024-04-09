<?php

namespace App\Classes;

use App\Interfaces\FileCounterInterface;

class DirectoryExplorer
{
    public function __construct(
        private FileCounterInterface $fileCounter
    ) {}

    public function exploreDirectory(string $directory): void
    {
        $fileCounts = $this->fileCounter->countFiles($directory);

        foreach ($fileCounts as $fileName => $count) {
            if ($count > 1) {
                echo "There are $count files with the name '$fileName' in the directory tree.\n";
            }
        }
    }
}
