<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\PrimeGenerator;
use App\Models\Usuario;

class UserTest extends TestCase
{

    private PrimeGenerator $generator;

    protected function setUp(): void
    {
        $this->generator = new PrimeGenerator();
    }

    public function testGeneratePrimesReturnsEmptyArrayForInvalidInput(): void
    {
        $this->assertEquals([], $this->generator->generatePrimes(-1));
        $this->assertEquals([], $this->generator->generatePrimes(0));
        $this->assertEquals([2], $this->generator->generatePrimes(1));
    }

    public function testGeneratePrimesReturnsCorrectPrimes(): void
    {
        $this->assertEquals([2, 3, 5, 7, 11, 13, 17, 19, 23, 29], $this->generator->generatePrimes(10));
        $this->assertEquals([2, 3, 5, 7], $this->generator->generatePrimes(4));
    }


    public function testIsPrimeReturnsFalseForNonPrimes(): void
    {
        $this->assertFalse($this->generator->isPrime(-5));
        $this->assertFalse($this->generator->isPrime(0));
        $this->assertFalse($this->generator->isPrime(1));
        $this->assertFalse($this->generator->isPrime(4));
        $this->assertFalse($this->generator->isPrime(9));
    }

    public function testIsPrimeReturnsTrueForPrimes(): void
    {
        $this->assertTrue($this->generator->isPrime(2));
        $this->assertTrue($this->generator->isPrime(3));
        $this->assertTrue($this->generator->isPrime(5));
        $this->assertTrue($this->generator->isPrime(7));
        $this->assertTrue($this->generator->isPrime(13));
    }
}
