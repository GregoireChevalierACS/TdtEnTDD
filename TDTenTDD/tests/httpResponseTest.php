<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class HttpResponseTest extends TestCase{

    public function TestHttpResponse() : void
    {   
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);
    }

}