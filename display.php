<?php
require_once 'Classes/ClassProduct.php';
require_once 'Classes/ClassCart.php';
require_once 'Classes/ClassOrder.php';
require_once 'Classes/ClassRegisteredCustomer.php';

// Création des produits
$product1 = new Product("Laptop", 3500, "A high-performance Gaming laptop");
$product2 = new Product("Smartphone", 1300, "A good smartphone");
$product3 = new Product("Headphones", 350, "Noise-cancelling headphones Razer");
$product4 = new Product("Charger", 20, "Fast Charging");

$allProducts = [$product1, $product2, $product3, $product4];

// Function to display all products
function displayAllProducts($products) {
    
    echo "<h1>All Products:\n</h1>";
    foreach ($products as $product) {
        $product->display();
    }
    echo "\n";
}
// Display all products
displayAllProducts($allProducts);
// Création du panier et ajout des produits
$cart = new Cart();
$cart->add($product1);
$cart->add($product2);

// $cart->removeProduct($product1);

// Affichage du contenu et du total du panier
$cart->displayCart();

// Passer une première commande
$order1 = new Order($cart->getProducts(), $cart->getTotal());

// Création d'un client et ajout de la première commande à l'historique
$customer = new RegisteredCustomer();
$customer->makeOrder($order1);

// Affichage de l'historique des commandes
echo "<h2>Order History after first order:\n</h2>";
foreach ($customer->getHistory() as $ord) {
    $ord->displayOrder();
}

// Ajouter un autre produit au panier
$cart->add($product3);
$cart->add($product4);

// Affichage du contenu et du total du panier mis à jour
$cart->displayCart();
echo"\n";
// Passer une deuxième commande
$order2 = new Order($cart->getProducts(), $cart->getTotal());
$customer->makeOrder($order2);

// Affichage de l'historique des commandes mis à jour
echo "<h2>\n Order History after second order:\n</h2>";
foreach ($customer->getHistory() as $ord) {
    $ord->displayOrder();
}
?>
