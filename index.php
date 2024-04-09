<?php

namespace App;

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\DirectoryExplorer;
use App\Classes\FileCounter;

$directory = '/home/bs/misc/apps/RecursiveFileCounter';
$fileCounter = new FileCounter();
$directoryTraverser = new DirectoryExplorer($fileCounter);
$directoryTraverser->traverseDirectory($directory);
