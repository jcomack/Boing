<?php namespace jcomack\Boing\Client;

use Psr\Http\Message\StreamInterface;

/**
 * Class Request
 * @package jcomack\Boing\Client
 */
class Request
{
    protected $headers = [];

    /** @var string|resource|StreamInterface */
    protected $body = null;

    /**
     * @var string
     */
    private $method;
    private $uri;

    public function __construct($uri, $method = 'GET')
    {
        $this->method = $method;
        $this->uri = $uri;
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
        $this->body = $content;
        
        return $this;
    }

    public function build()
    {
        return new \GuzzleHttp\Psr7\Request(strtoupper($this->method), $this->uri, $this->headers, $this->body);
    }

}
