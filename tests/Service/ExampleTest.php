<?php

namespace JorisRos\BoilerPlateBundle\Tests\Service;

use JorisRos\BoilerPlateBundle\Service\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testMultiply(): void
    {
        $example = new Example();
        $this->assertEquals($example->multiply(4), 16);
    }
}
