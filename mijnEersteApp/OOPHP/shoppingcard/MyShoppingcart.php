<?php
include "Shoppingcart.php";
class MyShoppingcart extends Shoppingcart
{
    public function printCart()
    {
        echo sprintf(
            "%-10s %-20s %-20s %10s %6s\n",
            "Product", "Merk", "Model", "Prijs", "Aantal"
        );
        foreach ($this->shoppingcart as $item){
            echo sprintf(
                "%-10s %-20s %-20s %10.2f %6s\n",
                $item->getId(),
                $item->getMerk(),
                $item->getModel(),
                $item->getPrijs(),
                $item->getAantal()
            );
        }
        $bedrag = 0;
        foreach ($this->shoppingcart as $item) {
            $bedrag += $item->getAantal() * $item->getPrijs();
        }
        echo "Totaalbedrag is: " . $bedrag;
    }
}
