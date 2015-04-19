<?php

namespace Triplecheck;

use Triplecheck\Common\PluginFactory;

/**
 * Class: Triplecheck
 *
 * Provides static access to the plugin factory methods. This is
 * the recommended route for plugin instantiation.
 *
 * Example:
 *
 * // Create a plugin for PhpCodeSniffer
 *
 * $plugin = Triplecheck::create('Phpcs');
 *
 * // Configure the plugin
 * $options = [...];
 * $plugin->configure($options);
 *
 * // Run the Plugin
 * $rawData = $plugin->run();
 * 
 * // Get the score for this plugin
 * pending
 *
 * @see Triplecheck\Common\PluginFactory
 */
class Triplecheck
{
    /**
     * Factory static class property, used to hold Plugin factory instance 
     */
    public static $factory;

    /**
     * getFactory
     *
     */
    public function getFactory()
    {
        if(is_null(static::$factory))
        {
            static::$factory = new PluginFactory;
        }

        return static::$factory;
    }
}
