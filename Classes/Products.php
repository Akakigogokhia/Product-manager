<?php

namespace Classes;

class Products extends ProductHandler
{
    public function get()
    {
        $result = $this->getData();
        return $result->get();
    }

    public function dvd($size)
    {
        $len = strlen($size);
        $n = ($len>>31)-(-$len>>31);
        echo str_repeat("Size: $size MB", $n);
    }

    public function furniture($height, $width, $length)
    {
        $len = strlen($height);
        $n = ($len>>31)-(-$len>>31);
        echo str_repeat("Dimension: {$height}x{$width}x{$length}", $n);
    }

    public function book($weight)
    {
        $len = strlen($weight);
        $n = ($len>>31)-(-$len>>31);
        echo str_repeat("Weight: {$weight}KG", $n);
    }
}
