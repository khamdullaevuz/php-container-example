<?php

use framework\App;
use framework\Container;
use framework\Database;

$container = new Container();

$container->bind(Database::class, function () {
    $config = require 'config.php';

    return new Database($config['database']);
});

App::setContainer($container);