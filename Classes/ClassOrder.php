<?php
require_once "ClassProduct.php";

class Order {
    private $products;
    private $totalprice;

    public function __construct($products, $totalprice) {
        $this->products = $products;
        $this->totalprice = $totalprice;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getTotalprice() {
        return $this->totalprice;
    }

    public function displayOrder() {
        foreach ($this->products as $product) {
            
            echo "<p>_" . $product->getName() . ": " . $product->getPrice() . "DH\n</p>";
        } 
        echo "<h4>Total Price is: " . $this->getTotalprice() . "DH\n</h4>";
    }
}
?>
