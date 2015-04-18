<?php

namespace Triplecheck;

use Triplecheck\Common\PluginFactory;

class Triplecheck
{
    public static $factory;

    public function getFactory()
    {
        if(is_null(static::$factory))
        {
            static::$factory = new PluginFactory;
        }

        return static::$factory;
    }
}
