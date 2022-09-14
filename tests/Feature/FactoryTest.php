<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FactoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_category()
    {
        $category = Category::factory()->create();
        $this->assertModelExists($category);
    }

    public function test_product(){
        Category::factory(10)->create();

        $product = Product::factory()->create();
        $this->assertModelExists($product);
    }
}
