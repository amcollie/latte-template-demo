<?php

declare(strict_types=1);

use Latte\Engine;

require_once dirname(__DIR__) . "/vendor/autoload.php";

$latte = new Engine;
$latte->setTempDirectory(dirname(__DIR__) . "/storage/cache");

$params = [
    'name' => 'Michael Jones',
    'foods' => [
        'curry chicken',
        'pea and rice',
        'coleslaw',
        'plantains'
    ]
];

$latte->render(dirname(__DIR__) . "/views/index.latte", $params);