<?php

namespace Classes\Products;

use Classes\PriceInterface;


/**
 * Product AppleWatch
 * @package Classes\Products
 */
class AppleWatch implements PriceInterface
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