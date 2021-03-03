<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    use DatabaseMigrations;

    public function test_hasStock_isTrue_whenThereIsStock()
    {
        $product = new Product();
        $product->setAttribute('stock', 45);

        $this->assertTrue($product->hasStock());
    }

    public function test_hasStock_isFalse_whenThereIsNoStock()
    {
        $product = new Product();
        $product->setAttribute('stock', 0);
        $this->assertFalse($product->hasStock());

        $product->setAttribute('stock', -5);
        $this->assertFalse($product->hasStock());
    }
}
