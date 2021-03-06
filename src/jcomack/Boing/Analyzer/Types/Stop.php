<?php namespace jcomack\Boing\Analyzer\Types;

/**
 * Class Stop
 * @package jcomack\Boing\Analyzer\Types
 */
class Stop extends Type implements AnalyzerType
{
    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [
            'stopwords' => ['string|array', '_english_'],
            'stopwords_path' => 'string',
        ];
    }
}
