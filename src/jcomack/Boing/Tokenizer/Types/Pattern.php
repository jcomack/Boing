<?php namespace jcomack\Boing\Tokenizer\Types;

/**
 * Class Pattern
 * @package jcomack\Boing\Tokenizer\Types
 */
class Pattern extends Type
{
    /**
     * Define the settings of the tokenizer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [
            'pattern' => ['string', '\\W+'],
            'flags' => ['string', ''],
            'group' => [ 'integer', -1 ],
        ];
    }
}
