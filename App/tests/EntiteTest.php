<?php

use App\Entity\Entite;
use PHPUnit\Framework\TestCase;

class EntiteTest extends TestCase
{
    public function testIsPositive()
        {
            $nombrePositif = new Entite();
            $this->assertGreaterThan(0, $nombrePositif->getNumber(8));
        }
 
}