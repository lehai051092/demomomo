<?php


namespace App\Http\Services\Imp;


use App\Http\Responsitories\Eloquent\ProductResponsitoryEloquent;
use App\Http\Services\ProductServiceInterface;

class ProductServiceImp implements ProductServiceInterface
{
    protected $productResponsitory;

    public function __construct(ProductResponsitoryEloquent $productResponsitory)
    {
        $this->productResponsitory = $productResponsitory;
    }

    function getAll()
    {
        return $this->productResponsitory->getAll();
    }
}
