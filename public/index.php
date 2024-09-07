<?php

use framework\App;
use framework\Database;

require __DIR__ . '/../loader.php';
require __DIR__ . '/../bootstrap.php';

try {
    print_r(App::resolve(Database::class)->query("SELECT * FROM notes WHERE id = :id", [
        'id' => 1
    ])->findOrFail());
    print_r(App::resolve(Database::class)->query("SELECT * FROM notes WHERE id = :id", [
            'id' => 1
    ])->findOrFail());
} catch (Exception $e) {
    echo $e->getMessage();
}