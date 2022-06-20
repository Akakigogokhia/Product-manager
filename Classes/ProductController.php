<?php

namespace Classes;

class ProductController extends ProductHandler
{
    public function createArray($router)
    {
        return $this->setArray($router);
    }

    public function checkBox($router)
    {
        return $this->check($router);
    }
}
