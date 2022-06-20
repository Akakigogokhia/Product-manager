<?php

namespace Classes;

class ProductHandler extends Product
{
    public function getData()
    {
        $query = 'SELECT * FROM products';
        $result = $this->conn->query($query);
        return new ProductDto($result);
    }



    protected function create($inputData)
    {
        $data = "'" . implode("','", $inputData) ."'";
        //echo $data;
        $query = "INSERT into products (sku,name,price,size,weight,height,width,length) VALUES($data)";
        $result = $this->conn->query($query);
    }

    protected function delete($item)
    {
        $query = "DELETE from products where sku='$item'";
        $this->conn->query($query);
    }
}
