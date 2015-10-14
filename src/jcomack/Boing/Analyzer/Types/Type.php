<?php namespace jcomack\Boing\Analyzer\Types;

use jcomack\Boing\Utilities;

/**
 * Class Type
 * @package jcomack\Boing\Analyzer\Types
 */
abstract class Type
{
    protected $settings;

    /**
     * Return the name of the analyzer
     *
     * @return string
     */
    public function name()
    {
        return get_class($this);
    }

    /**
     * Return the type of the analyzer
     *
     * @return string
     */
    public function type()
    {
        return Utilities::toSnakeCase(get_class($this));
    }

    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [];
    }

    public function output()
    {
        echo "Test";

        foreach ($this->settings as $key => $setting) {
            var_dump($key, $setting);
        }
    }
}
