<?php
require_once "ClassProduct.php";
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

public function removeProduct(Product $product) {
    foreach ($this->products as $key => $p) {
        if ($p === $product) {
            unset($this->products[$key]);
            break;
        }
    }
    $this->products = array_values($this->products); 
}

}




?>