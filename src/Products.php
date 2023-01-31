<?php namespace Appkonik\Products;

use Appkonik\Products\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class Products
{
    public function getById(int $id): string|Product
    {
        try {
            $product = Product::findOrFail($id);
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAll(): Collection
    {
        return Product::all();
    }

    public function get(int $page_size = 20)
    {
        return Product::paginate($page_size);
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
