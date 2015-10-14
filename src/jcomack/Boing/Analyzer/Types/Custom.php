<?php namespace jcomack\Boing\Analyzer\Types;

use jcomack\Boing\Filter\CharacterFilter;
use jcomack\Boing\Filter\Filter;
use jcomack\Boing\Tokenizer\Tokenizer;
use jcomack\Boing\Utilities;

/**
 * Class Custom
 * @package jcomack\Boing\Analyzer\Types
 */
class Custom extends Type
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var Tokenizer
     */
    private $tokenizer;
    /**
     * @var Filter
     */
    private $filter;
    /**
     * @var CharacterFilter
     */
    private $characterFilter;
    /**
     * @var int
     */
    private $offsetGap;

    public function __construct(
        string $name,
        Tokenizer $tokenizer,
        Filter $filter,
        CharacterFilter $characterFilter,
        $offsetGap = 1
    ) {

        $this->name = $name;
        $this->tokenizer = $tokenizer;
        $this->filter = $filter;
        $this->characterFilter = $characterFilter;
        $this->offsetGap = $offsetGap;
    }

    /**
     * Return the name of the analyzer
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Return the type of the analyzer
     *
     * @return string
     */
    public function type()
    {
        return Utilities::toSnakeCase('custom');
    }

    /**
     * Define the settings of the analyzer
     *
     * @return array
     */
    public function settings()
    {
        $this->settings = [];
    }
}
