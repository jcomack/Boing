<?php namespace jcomack\Boing\Tokenizer\Types;

/**
 * Class UaxUrlEmail
 * @package jcomack\Boing\Tokenizer\Types
 */
class UaxUrlEmail extends Type
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
