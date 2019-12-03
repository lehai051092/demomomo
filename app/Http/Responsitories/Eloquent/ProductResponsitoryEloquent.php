<?php


namespace App\Http\Responsitories\Eloquent;


use App\Http\Responsitories\ProductResponsitoryInterface;
use App\Product;

class ProductResponsitoryEloquent implements ProductResponsitoryInterface
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    function getAll()
    {
        return $this->product->all();
    }
}
