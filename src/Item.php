<?php

namespace Cache;

class Item
{
    private $name;
    
    /**
     *
     * @var \Cache\Cache
     */
    private $cache;
    
    private $value;
    
    public function __construct($name, Cache $cache) 
    {
        $this->setName($name);
        
        $this->setCache($cache);
    }
    
    public function isCached()
    {
        return $this->getCache()->has($this->getName());
    }
    
    public function setValue($value)
    {
        $this->value = $value;
        
        $this->getCache()->append($this);
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    protected function setName($name)
    {
        $this->name = $name;
    }
    
    protected function getName()
    {
        return $this->getName();
    }
    
    protected function setCache($cache)
    {
        $this->cache = $cache;
    }
    
    /**
     * 
     * @return \Cache\Cache
     */
    protected function getCache()
    {
        return $this->cache;
    }
}
