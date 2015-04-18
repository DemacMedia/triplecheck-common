<?php

namespace Triplecheck\Common;

class PluginFactory
{
    protected $plugins = array();

    public function all()
    {
        return $this->plugins;
    }
}
