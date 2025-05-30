<?php
class Food {
    private $name;
    private $price;
    function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
    function show_price(){
       echo $this->price . '<br>';
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;
     function __construct($name,$height,$weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
     }
    function show_height(){
       echo $this->height . '<br>';
    }
}
$food = new Food('pateto',250);
$Animal = new Animal('dog',60,5000);

print_r($food -> show_price());
print_r($Animal -> show_height());
?>