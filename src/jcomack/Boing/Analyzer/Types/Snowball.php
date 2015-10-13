<?php namespace jcomack\Boing\Analyzer\Types;

/**
 * Class Snowball
 * @package jcomack\Boing\Analyzer\Types
 */
class Snowball extends Type implements AnalyzerType
{
    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [
            'language' => ['string', 'English'],
        ];
    }
}
