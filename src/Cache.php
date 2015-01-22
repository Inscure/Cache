<?php

namespace Cache;

class Cache
{
    protected $storage;
    
    public function item($name)
    {
        try {
            return $this->getItem($name);
        } catch (\Exception $e) {
            return new Item($name);
        }
    }
    
    public function has($name)
    {
        try {
            return (bool) $this->getItem($name);
        } catch (\Exception $e) {
            return false;
        }
    }
    
    public function get($name)
    {
        return $this->get($name)->getValue();
    }
    
    protected function getItem($name)
    {
        foreach($this->storage as $item) {
            if ($item->getName() === $name) {
                return $item;
            }
        }
        
        throw new \Exception('Element nie istnieje w cache.');
    }
    
    public function append(Item $item) 
    {
        $this->storage[] = $item;
    }
}