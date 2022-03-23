<?php
interface Ishoppingcart{
    public function addToCart(Item $item);
    public function printCart();
}
