<?php

use framework\Database;

require __DIR__ . '/../loader.php';
require base_path('bootstrap.php');

try {
    $db = app()->make(Database::class);
    dd($db->query("SELECT * FROM notes WHERE id = :id", [
        'id' => 1
    ])->findOrFail());
} catch (Exception $e) {
    echo $e->getMessage();
}