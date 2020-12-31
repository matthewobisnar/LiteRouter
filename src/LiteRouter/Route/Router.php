<?php
namespace LiteRouter\Route;

use ClosedGeneratorException;
use LiteRouter\Route\RouterTraits\RouterTraits;
use LiteRouter\Exceptions\InvalidArgumentException;

class Router
{
    use RouterTraits;

    /**
     * Collection of routes.
     * 
     * @var array 
     */
    protected $routes = [];

    /**
     * __DIR__ path or rootpath of application.
     * 
     * @var string
     */
    protected $basePath;
    
    /**
     * @param string __DIR__
     * @return void
     */
    public function __construct($basePath = null)
    {
        $this->basePath = $basePath;
    }

    /**
     * 
     * 
     */
    public function map(array $verb = ['GET'], string $uri, $concrete = null)
    {
       
        if (!$concrete instanceof \Closure && !is_string($concrete)) {
            throw new \InvalidArgumentException(
                sprintf("%s must be a closure or string. %s is given.", json_encode($concrete), gettype($concrete))
            );
        }


        $this->addRoute($verb, $uri, $concrete);

        return $this;
    }

    protected function addRoute($verb, $uri, $concrete)
    {
        
    }

    protected function generateUri($uri)
    {

    }
}