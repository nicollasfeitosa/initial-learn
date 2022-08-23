<?php

namespace NICK;

use NICK\Product;

class ListProduct
{
    const PRODUCTS_TYPE = 0;
    public $name = 'Propriedade';

    public function addProduct(Product $product)
    {
        $this->list[] = $product->getTitle();
    }

    public function getAll()
    {
        return $this->list;
    }
}
