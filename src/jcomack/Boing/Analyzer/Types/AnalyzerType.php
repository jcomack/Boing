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
    public function name();

    /**
     * Return the type of the analyzer
     *
     * @return string
     */
    public function type();

    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function settings();
}
