<?php

namespace Classes\Products;

use Classes\PriceInterface;
use Classes\Products\AppleCombo;
use Classes\Products\NSwitchCombo;


/**
 * Product AppleXNSwitchCombo
 * @package Classes\Products
 */
class AppleXNSwitchCombo implements PriceInterface
{
    /** @var discount */
    const DISCOUNT = 1000;

    /** @var \Illuminate\Support\Collection */
    private $products;

    /**
     * AppleXNSwitchCombo constructor.
     */
    public function __construct()
    {
        $this->products = collect([
            new AppleCombo(),
            new NSwitchCombo(),
        ]);
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->products->sum(function ($product) {
                return $product->getPrice();
            }) - self::DISCOUNT;
    }
}