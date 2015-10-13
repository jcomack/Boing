<?php namespace jcomack\Boing\Tokenizer\Types;

use jcomack\Boing\Utilities;

/**
 * Class Type
 * @package jcomack\Boing\Tokenizer\Types
 */
abstract class Type
{
    protected $settings;

    /**
     * Return the name of the tokenizer
     *
     * @return string
     */
    public function name()
    {
        return get_class($this);
    }

    /**
     * Return the type of the tokenizer
     *
     * @return string
     */
    public function type()
    {
        return Utilities::toSnakeCase(get_class($this));
    }

    /**
     * Define the settings of the tokenizer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [];
    }

}
