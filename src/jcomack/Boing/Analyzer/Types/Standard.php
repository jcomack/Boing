<?php namespace jcomack\Boing\Analyzer\Types;

/**
 * Class Standard
 * @package jcomack\Boing\Analyzer\Types
 */
class Standard implements AnalyzerType
{
    protected $settings;

    /**
     * Return the name of the analyzer
     *
     * @return string
     */
    public function analyzerName()
    {
        return 'Standard';
    }

    /**
     * Return the type of the analyzer
     *
     * @return string
     */
    public function analyzerType()
    {
        return 'standard';
    }

    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function availableSettings()
    {
        $this->settings = [
            'stopwords' => 'string',
            'max_token_length' => 'integer',
        ];
    }
}
