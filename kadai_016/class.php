<?php
class Food {
    private $name;
    private $price;
    function show_price(){
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;
    function show_height(){
        $this->name = $name;
        $this->height = $height;
        $this->weight =$weight;
    }
}
$food = new Food('pateto',250);
$Animal = new Animal('dog',60,5000);

print_r($food -> show_price());
print_r($Animal -> show_height());
?>