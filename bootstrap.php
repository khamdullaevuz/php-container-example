<?php

use framework\App;
use framework\Container;
use framework\Database;

App::setContainer(new Container());
App::singleton(Database::class, function () {
    $config = require 'config.php';

    return new Database($config['database']);
});