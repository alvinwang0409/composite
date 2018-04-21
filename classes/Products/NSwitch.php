<?php

namespace Classes\Products;

use Classes\PriceInterface;


/**
 * Product NSwitch
 * @package Classes\Products
 */
class NSwitch implements PriceInterface
{
    /** @price */
    const PRICE = 10000;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return self::PRICE;
    }
}