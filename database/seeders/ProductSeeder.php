<?php
namespace Database\Seeders;

use Illuminate\Database\Seeders;
use App\Models\Product;
class pRODUCTsEEDER extends Seeder
{
    public function run(): variant_mod
    {
        Products::create([
            'img' => 'shoe.png',
            'brand' => 'nike',
            'title' => 'air max',
            'rating' => '5',
            'reviwes' => '120',
            'sellprice' => '100',
            'orders' => '150',
            'mrp' => '12',
            'discount' => '20',
            'category' => 'shoes',
        ]);
                Products::create([
            'img' => 'shoe.png',
            'brand' => 'adidas',
            'title' => 'air max',
            'rating' => '5',
            'reviwes' => '120',
            'sellprice' => '100',
            'orders' => '150',
            'mrp' => '12',
            'discount' => '20',
            'category' => 'shoes',
        ]);
    }
}