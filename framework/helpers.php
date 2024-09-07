<?php

use framework\App;

if(!function_exists('app'))
{
    /**
     * @throws Exception
     */
    function app($abstract = null)
    {
        if(is_null($abstract))
        {
            return App::getContainer();
        }

        return App::getContainer()->make($abstract);
    }
}

if(!function_exists('config'))
{
    function config($key)
    {
        $config = require 'config.php';

        return $config[$key];
    }
}

if(!function_exists('dd'))
{
    function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}