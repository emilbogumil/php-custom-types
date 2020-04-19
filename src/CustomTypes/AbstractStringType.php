<?php

namespace CustomTypes;

abstract class AbstractStringType
{
    const BASE_TYPE = "string";
    const VALIDATION_REGEX = "/.*/";
    const TYPE_NAME = "string";
    
    protected function validate($value): AbstractType
    {
        return $this->validateRegex($value);
    }
    
    protected function validateRegex(string $string): self
    {
        if (!preg_match(static::VALIDATION_REGEX, $string)) 
		    throw new Exception("Not a correct "
		        . static::TYPE_NAME
		        . " format: "
		        . $string
		        . "!"
		    );
		
		return $this;
    } 
}