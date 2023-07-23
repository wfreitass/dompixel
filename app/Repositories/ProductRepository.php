<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;

class ProductRepository extends BaseRepository implements ProductInterface
{
    protected $productRepository;

    public function __construct(Product $productRepository)
    {
        $this->productRepository = $productRepository;
        parent::__construct($productRepository);
    }
}
