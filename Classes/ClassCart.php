<?php

Class Cart{
private $products = [];


public function getProducts(){
    return $this->products;
}
public function add(Product $product){
    $this->products[] = $product;
}

public function Total(){
    $total = 0;
    foreach($this->products as $product){
        $total += $product->getPrice();
    }
    return $total;
}


}




?>