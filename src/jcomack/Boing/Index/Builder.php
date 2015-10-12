<?php namespace jcomack\Boing\Index;

/**
 * Class Builder
 * @package jcomack\Boing\Index
 */
class Builder
{
    private $name;

    private $shards = 5;
    private $replicas = 1;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function shards($shards)
    {
        $this->shards = $shards;

        return $this;
    }

    public function replicas($replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

}
