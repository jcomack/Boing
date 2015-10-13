<?php namespace jcomack\Boing\Tokenizer\Types;

/**
 * Class Keyword
 * @package jcomack\Boing\Tokenizer\Types
 */
class Keyword extends Type
{
    /**
     * Define the settings of the tokenizer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [ 'buffer_size' => ['integer', 256] ];
    }
}
