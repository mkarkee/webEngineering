<?php

    session_start();
    $name = $_POST['name'];
    $price = $_POST['price'];

    $product = array($name,$price, $quantity);
    $_SESSION[$name] = $product;
    

    header('location:browse.php');

?>