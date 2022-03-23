<?php
include "Ishoppingcart.php";
abstract class Shoppingcart implements Ishoppingcart
{
    protected $shoppingcart = array();
    //implementeer addToCart
    public function addToCart(Item $item)
    {
        $this->shoppingcart[] = $item;
    }
    //printCart blijft abstract
    public abstract function printCart();
}

