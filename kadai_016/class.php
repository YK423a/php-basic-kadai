<?php
class Food {
    private $name;
    private $price;
    function show_price($name,$price){
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;
    function show_height($name,$height,$weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight =$weight;
    }
}
show_price('pateto',250);
show_height('dog',60,5000);
?>