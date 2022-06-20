<?php

namespace Classes;

abstract class Product
{
    protected $sku;
    protected $name;
    protected $price;
    protected $size;
    protected $weight;
    protected $height;
    protected $width;
    protected $length;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function setArray($router)
    {
        $router->post('/save', function ($request) {
            $body = $request->getBody();
            $inputData =
                [
                    $this->sku = validate($this->conn, $body['sku']),
                    $this->name = validate($this->conn, $body['name']),
                    $this->price = validate($this->conn, $body['price']),
                    $this->size = validate($this->conn, $body['size']),
                    $this->weight = validate($this->conn, $body['weight']),
                    $this->height = validate($this->conn, $body['height']),
                    $this->width = validate($this->conn, $body['width']),
                    $this->length = validate($this->conn, $body['length']),
                ];
            $this->create($inputData);
            $URL="/productList";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        });
            
    }


    public function check($router)
    {
        if (isset($_POST['delete'])) {
            $router->post('/delete', function ($request) {
                $body = $request->getBody();
                foreach ($body['checkbox'] as $item) {
                    $this->delete($item);
                }
            });
            $URL="/productList";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        }
    }
}
