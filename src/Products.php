<?php namespace Appkonik\Products;

use Appkonik\Products\Models\Product;
use Exception;

class Products
{
    public function get(int $id): string|Product
    {
        try {
            $product = Product::findOrFail($id);
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function add(array $data): string|Product
    {
        try {
            $product = new Product();
            $product->fill($data)->save();
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(int $id, array $data): string|Product
    {
        try {
            $product = Product::findOrFail($id);
            $product->fill($data)->save();
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function remove(int $id): bool|string
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
