<?php

namespace Triplecheck\Common;

class PluginFactory
{
    protected $plugins = array();

    public function all()
    {
        return $this->plugins;
    }

    public function create($classname)
    {
        if (!class_exists($classname))
        {
            throw new \Exception("Class $classname not found");
        }
        return new $classname;
    }
}
