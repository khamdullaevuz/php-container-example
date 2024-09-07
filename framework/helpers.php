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