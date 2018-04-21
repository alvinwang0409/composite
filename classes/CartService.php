<?php

namespace Classes;

/**
 * Class CartService
 * @package Classes
 */
class CartService
{
    /** @var \Illuminate\Support\Collection */
    private $products;

    /**
     * CartService constructor.
     */
    public function __construct()
    {
        $this->products = collect([]);
    }


    /**
     * @param PriceInterface $product
     */
    public function addProduct(PriceInterface $product)
    {
        $this->products->push($product);
    }

    /**
     * @return float
     */
    public function calculatePrice(): float
    {
        return $this->products->sum(function ($product) {
            return $product->getPrice();
        });
    }
}