<?php namespace jcomack\Boing\Tokenizer\Types;

/**
 * Class Classic
 * @package jcomack\Boing\Tokenizer\Types
 */
class Classic extends Type
{
    /**
     * Define the settings of the tokenizer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = ['max_token_length' => ['integer', 255] ];
    }
}
