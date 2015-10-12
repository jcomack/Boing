<?php namespace jcomack\Boing\Analyzer\Types;

/**
 * Class Stop
 * @package jcomack\Boing\Analyzer\Types
 */
class Stop implements AnalyzerType
{
    protected $settings;

    /**
     * Return the name of the analyzer
     *
     * @return string
     */
    public function analyzerName()
    {
        return 'Stop';
    }

    /**
     * Return the type of the analyzer
     *
     * @return string
     */
    public function analyzerType()
    {
        return 'stop';
    }

    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function availableSettings()
    {
        $this->settings = [
            'stopwords' => 'list',
            'stopwords_path' => 'string',
        ];
    }
}
