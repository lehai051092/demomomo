<?php

namespace App\Http\Controllers;

use App\Http\Services\Imp\ProductServiceImp;
use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceImp $productService)
    {
        $this->productService = $productService;
    }

    public function getAll()
    {
        try {
            $products = $this->productService->getAll();
        } catch (\Exception $exception) {
            return \response()->json([
                'message' => $exception->getMessage(),
                'status' => 'error'
            ]);
        }
        return \response()->json([
            'message' => 'OK',
            'data' => $products,
            'status' => 'success'
        ]);
    }
}
