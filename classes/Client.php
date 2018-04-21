<?php

namespace Classes;

use Classes\CartService;
use Classes\Products\Macbook;
use Classes\Products\IpadAir;
use Classes\Products\AppleWatch;
use Classes\Products\AppleCombo;
use Classes\Products\NSwitchCombo;
use Classes\Products\AppleXNSwitchCombo;

class Client
{
    public static function main()
    {
        $cartService = new CartService;
        //        $cartService->addProduct(new Macbook());
        //        $cartService->addProduct(new IpadAir());
        //        $cartService->addProduct(new AppleWatch());

        //        $cartService->addProduct(new AppleCombo());

        //        $cartService->addProduct(new NSwitchCombo());

        $cartService->addProduct(new AppleXNSwitchCombo());

        $totalPrice = $cartService->calculatePrice();

        echo sprintf('total price : %d', $totalPrice);
    }
}