<?php

namespace Classes\Products;

use Classes\PriceInterface;
use Classes\Products\NSwitch;
use Classes\Products\Zelda;


/**
 * Product NSwitchCombo
 * @package Classes\Products
 */
class NSwitchCombo implements PriceInterface
{
    /** @var discount */
    const DISCOUNT = 0.9;

    /**
     * @var \Illuminate\Support\Collection
     */
    private $products;

    /**
     * NSwitchCombo constructor.
     */
    public function __construct()
    {
        $this->products = collect([
            new NSwitch(),
            new Zelda(),
        ]);
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->products->sum(function ($product) {
                return $product->getPrice();
            }) * self::DISCOUNT;
    }
}