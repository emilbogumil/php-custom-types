<?php

namespace EmilBogumil\CustomTypes;

abstract class AbstractType
{
    protected $value;
    
    public function __construct($value)
    {
        $this->setValue($value);
    }
    
    public function __toString()
    {
        return $this->value;
    }
    
    protected function setValue ($value): self
    {
        $this
            ->validateType($value)
            ->validate($value)
            ->value = $value;
        
        return $this;
    }
    
    protected function validateType($value): self
    {
        if (gettype($value) !== static::BASE_TYPE)
            throw new \Exception("Wrong type given in constructor for "
                . static::TYPE_NAME
                . "! Expected "
                . static::BASE_TYPE
                . ", given "
                . gettype($value)
                . "."
            );
        
        return $this;
    }
    
    protected function validate($value): self
    {
        return $this;
    }
}
