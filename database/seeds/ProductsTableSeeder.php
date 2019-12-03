<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->id = 1;
        $product->name = 'Asus';
        $product->price = 3000;
        $product->save();

        $product = new Product();
        $product->id = 2;
        $product->name = 'Dell';
        $product->price = 3000;
        $product->save();

        $product = new Product();
        $product->id = 3;
        $product->name = 'Hp';
        $product->price = 3000;
        $product->save();

    }
}
