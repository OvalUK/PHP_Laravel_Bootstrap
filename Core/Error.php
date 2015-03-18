<?php

namespace Oval\Laravel\Bootstrap\Core;

use KeyValuePair;

class Error
{
    const SUCCESS = 1;
    const FAIL = 2;
    
    public $Message;
    public $Type;
    
    public function __Construct( KeyValuePair $keyValuePair, $type = Error::FAIL )
    {
        $this->Message = $keyValuePair;
        $this->Type = $type;
    }    
    
    public static function UndefinedProperty( $field )
    {
        throw new Exception( "The property '$field' does not exist!" );
    }
}