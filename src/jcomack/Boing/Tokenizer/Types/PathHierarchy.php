<?php namespace jcomack\Boing\Tokenizer\Types;

/**
 * Class PathHierarchy
 * @package jcomack\Boing\Tokenizer\Types
 */
class PathHierarchy extends Type
{
    /**
     * Define the settings of the tokenizer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [
            'delimiter' => ['string', '/'],
            'replacement' => ['string', ''],
            'buffer_size' => [ 'integer', 1024 ],
            'reverse' => [ 'boolean', false ],
            'skip' => [ 'integer', 0 ],
            'type' => [ 'string', 'PathHierarchy' ],
        ];
    }
}
