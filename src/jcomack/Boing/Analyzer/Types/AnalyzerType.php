<?php namespace jcomack\Boing\Analyzer\Types;

/**
 * Interface AnalyzerType
 * @package jcomack\Boing\Analyzer\Types
 */
interface AnalyzerType
{
    /**
     * Return the name of the analyzer
     *
     * @return string
     */
    public function analyzerName();

    /**
     * Return the type of the analyzer
     *
     * @return string
     */
    public function analyzerType();

    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function availableSettings();
}
