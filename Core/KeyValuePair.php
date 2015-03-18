<?php

class KeyValuePair
{
    public $Key;
    public $Value;
    
    /**
     * Just pass in a key and a value
     * 
     * @param type $key
     * @param type $value
     */
    public function __Construct( $key, $value )
    {
        $this->Key = $key;
        $this->Value = $value;
    }    
}