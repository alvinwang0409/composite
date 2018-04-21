<?php

namespace Classes\Products;

use Classes\PriceInterface;


/**
 * Product Macbook
 * @package Classes\Products
 */
class Macbook implements PriceInterface
{
    /** @var price */
    const PRICE = 60000;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return self::PRICE;
    }
}