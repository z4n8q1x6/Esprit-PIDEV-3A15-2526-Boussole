<?php
require __DIR__ . '/vendor/autoload.php';

use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Flasher\Prime\Storage\StorageManagerInterface;

// If we can just call sweetalert() locally to see what methods it has...
// Actually, I can just use replace_file_content to use /** @phpstan-ignore-next-line */
