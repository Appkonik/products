<?php namespace Appkonik\Products;

use Appkonik\Products\Models\Product;
use Exception;

class Products
{
    public function get($id): string|Product
    {
        try {
            $product = Product::findOrFail($id);
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function add($data): string|Product
    {
        try {
            $product = new Product();
            $product->fill($data)->save();
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update($id, $data): string|Product
    {
        try {
            $product = Product::findOrFail($id);
            $product->fill($data)->save();
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function remove($id): bool|string
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
