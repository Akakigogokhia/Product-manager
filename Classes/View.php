<?php

namespace Classes;

class View {
    
    public function render($file){
        require __DIR__ . '../../' . $file . '.php';
    }
}