<?php 
namespace Rajashekar\Designpatterns\Others\DependencyInjection;

class ServiceContainer {

    private $bindings;
    private $instances;

    public function bind($name,$resolver)
    {
        $this->bindings[$name] = $resolver;
    }

    public function getBindings()
    {
        return $this->bindings;
    }

    public function getInstances()
    {
        return $this->instances;
    }

    public function make($name)
    {
        if(isset($this->instances[$name]))
        {
            return $this->instances[$name];
        }

        if (!isset($this->bindings[$name])) {
            throw new \Exception("No binding found for $name");
        }

        $resolver = $this->bindings[$name];
        
        if (is_callable($resolver)) {
            $this->instances[$name] = $resolver($this);
        } else {
            // Resolve the class using reflection if not a callable
            $this->instances[$name] = $this->resolve($resolver);
        }
    
        return $this->instances[$name];
    }


    protected function resolve($class) 
    {
        $reflection = new \ReflectionClass($class);
        
        if (!$reflection->isInstantiable()) {
            throw new \Exception("$class is not instantiable");
        }
        
        $constructor = $reflection->getConstructor();
       
        if (is_null($constructor)) {
            return new $class;
        }
        
        $parameters = $constructor->getParameters();
        $dependencies = array_map(function ($parameter) {
            if(!is_null($parameter->getType()))
            {
                $name = $parameter->getType()->getName();
                return $this->make($name);
            }
        }, $parameters);

        return $reflection->newInstanceArgs($dependencies);
    }
}
?>