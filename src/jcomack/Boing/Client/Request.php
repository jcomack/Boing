<?php namespace jcomack\Boing\Client;

/**
 * Class Request
 * @package jcomack\Boing\Client
 */
class Request
{
    protected $headers = [];
    protected $body = [];

    /**
     * @var string
     */
    private $method;

    public function __construct($method = 'GET')
    {
        $this->method = $method;
    }

    public function header($header, $value)
    {
        if (!is_string($header) || !is_string($value)) {
            throw new \Exception('Header must be a string');
        }

        $this->headers[$header] = $value;

        return $this;
    }

    public function headers(array $headers)
    {
        foreach ($headers as $header => $headerValue) {
            $this->header($header, $headerValue);
        }

        return $this;
    }

    public function body($content)
    {
        $this->body['body'] = $content;
        
        return $this;
    }

}
