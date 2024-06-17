<?php
require_once "ClassProduct.php";

class Order{


private $products;
private $totalprice;

public function __construct($products, $totalprice)
{
    $this->products = $products;
    $this->totalprice = $totalprice;
}

public function getProducts(){
    return $this->products;
}
public function getTotalprice(){
    return $this->totalprice;
}

public function DisplayOrder(){
    foreach ($this->products as $product){
        echo "_" . $product->getName() . ":" . $product->getPrice() . "DH \n" ;
        echo "Total Price is :" . $product->getTotalprice() . "DH \n" ;
    }
}


}
?>