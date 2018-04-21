<?php

namespace Classes\Products;

use Classes\PriceInterface;


/**
 * Product IpadAir
 * @package Classes\Products
 */
class IpadAir implements PriceInterface
{
    /** @var price */
    const PRICE = 10000;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return self::PRICE;
    }
}