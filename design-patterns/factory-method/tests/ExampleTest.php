<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function tests_minimalist_approach()
    {
        $graphic_obj = new \App\MinimalistApproach\GraphicFactory();
        $this->assertInstanceOf(\App\MinimalistApproach\Contracts\Product::class, $graphic_obj->startFactory());
        $this->assertInstanceOf(\App\MinimalistApproach\GraphicProduct::class, $graphic_obj->startFactory());

        $text_obj = new \App\MinimalistApproach\TextFactory();
        $this->assertInstanceOf(\App\MinimalistApproach\Contracts\Product::class, $text_obj->startFactory());
        $this->assertInstanceOf(\App\MinimalistApproach\TextProduct::class, $text_obj->startFactory());
    }

    /** @test */
    public function tests_multiple_products_approach()
    {
        $product_factory = new \App\MultipleProductsApproach\ProductFactory();
        $this->assertInstanceOf(
            \App\MultipleProductsApproach\GraphicProduct::class,
            $product_factory->make(App\MultipleProductsApproach\GraphicProduct::class)
        );
        $this->assertInstanceOf(
            \App\MultipleProductsApproach\TextProduct::class,
            $product_factory->make(App\MultipleProductsApproach\TextProduct::class)
        );
    }
}