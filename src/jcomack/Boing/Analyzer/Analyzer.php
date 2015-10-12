<?php namespace jcomack\Boing\Analyzer;

/**
 * Class Analyzer
 * @package jcomack\Boing\Analyzer
 */
class Analyzer
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
