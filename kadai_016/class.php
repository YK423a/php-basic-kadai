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
$food = new Food();
$Animal = new Animal();

print_r($food -> show_price('pateto',250));
print_r($Animal -> show_height('dog',60,5000));
?>