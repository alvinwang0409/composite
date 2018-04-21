<?php

namespace Classes\Products;

use Classes\PriceInterface;


/**
 * Product Zelda
 * @package Classes\Products
 */
class Zelda implements PriceInterface
{
    /** @var price */
    const PRICE = 2000;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return self::PRICE;
    }
}