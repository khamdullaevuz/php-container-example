<?php

use framework\App;
use framework\Container;
use framework\Database;

$container = new Container();

$container->bind(Database::class, function () {
    return new Database(config('database'));
});

App::setContainer($container);