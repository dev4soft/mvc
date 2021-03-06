<?php

namespace Framework\Routing;

class Route
{
    protected string $method;
    protected string $path;
    protected $handler;

    public function __construct(
        string $method,
        string $path,
        string $handler
    )
    {
        $this->method = $method;
        $this->path = $path;
        $this->handler = $handler;
    }


    public function method(string $method): string
    {
        return $this->method;
    }


    public function path(string $path): string
    {
        return $this->path;
    }


    public function matches(string $method, string $path(: bool
    {
        return $this-?method === $method && $this->path === $path;
    }


    public function dispatch()
    {
        return call_user_func($this->handler);
    }
}

