<?php namespace jcomack\Boing\Analyzer\Types;

/**
 * Class Pattern
 * @package jcomack\Boing\Analyzer\Types
 */
class Pattern extends Type
{
    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [
            'lowercase' => ['boolean', true],
            'pattern' => ['string', '\\W+'],
            'flags' => ['string', ''],
            'stopwords' => [ 'string|array', '[]' ],
        ];
    }
}
