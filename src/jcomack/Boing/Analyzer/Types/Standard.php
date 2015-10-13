<?php namespace jcomack\Boing\Analyzer\Types;

/**
 * Class Standard
 * @package jcomack\Boing\Analyzer\Types
 */
class Standard extends Type implements AnalyzerType
{
    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [
            'stopwords' => 'string',
            'max_token_length' => 'integer',
        ];
    }
}
