<?php

namespace Classes\Products;

use Classes\PriceInterface;
use Classes\Products\Macbook;
use Classes\Products\IpadAir;
use Classes\Products\AppleWatch;

/**
 * Product AppleCombo
 * @package Classes\Products
 */
class AppleCombo implements PriceInterface
{
    /** @var discount */
    const DISCOUNT = 0.9;

    /** @var \Illuminate\Support\Collection */
    private $products;

    /**
     * AppleCombo constructor.
     */
    public function __construct()
    {
        $this->products = collect([
            new Macbook(),
            new IpadAir(),
            new AppleWatch(),
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