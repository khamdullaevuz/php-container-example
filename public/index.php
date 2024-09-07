<?php

use framework\Database;

require __DIR__ . '/../loader.php';
require __DIR__ . '/../bootstrap.php';

try {
    $db = app()->make(Database::class);
    print_r($db->query("SELECT * FROM notes WHERE id = :id", [
        'id' => 1
    ])->findOrFail());
} catch (Exception $e) {
    echo $e->getMessage();
}