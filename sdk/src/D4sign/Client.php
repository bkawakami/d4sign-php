<?php
namespace D4sign;

use D4sign\Services\Documents;
use D4sign\Services\Safes;

class Client extends ClientBase
{
    public $documents;
    
    public function __construct()
    {
        $this->documents 	= new Documents($this);
        $this->safes 		= new Safes($this);
    }
    
}
