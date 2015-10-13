<?php namespace jcomack\Boing\Tokenizer\Types;

/**
 * Class EdgeNGram
 * @package jcomack\Boing\Tokenizer\Types
 */
class EdgeNGram extends Type
{
    /**
     * Define the settings of the tokenizer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [
            'min_gram' => ['integer', 1],
            'max_gram' => ['integer', 2],
            'token_chars' => [ 'array' => [ 'letter', 'digit', 'whitespace', 'punctuation', 'symbol' ], '[]' ],
        ];
    }
}
