<?php
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testEquals()
    {
        $var1 = 1;
        $var2 = 2;
        $sum = $var1 + $var2;
        $this->assertSame(3, $sum, "La somme ne correspond pas");
    }

    public function testPositive()
    {
        $var1 = 1;
        $var2 = 2;
        $sum = $var1 + $var2;
        $this->assertGreaterThan(0, $sum, "La somme n'est pas positive");
    }
}