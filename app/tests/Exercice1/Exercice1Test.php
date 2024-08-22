<?php

namespace Tests\Exercice1;

final class Exercice1Test extends \PHPUnit\Framework\TestCase
{
    public function test_fileExists()
    {
        $filename = __DIR__ . '/../../src/Exercice1/Product.php';
        $this->assertFileExists($filename);
    }

    public function test_classExists()
    {
        $this->assertTrue(class_exists('App\Exercice1\Product'));
    }

    public function test_objectInstance()
    {
        $product = new \App\Exercice1\Product();
        $this->assertInstanceOf(\App\Exercice1\Product::class, $product);
    }
}