<?php

namespace Classes;

class ProductDto {
    
    protected $result;
    
    public function __construct($result){
        $this->result = $result;
    }
    
    public function get(){
        return $this->result;
    }
}