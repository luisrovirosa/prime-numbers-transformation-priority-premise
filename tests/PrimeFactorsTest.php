<?php

namespace LuisRovirosa\Tests;

use LuisRovirosa\PrimeGenerator;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
    /** @var  PrimeGenerator */
    private $primeGenerator;

    protected function setUp()
    {
        parent::setUp();
        $this->primeGenerator = new PrimeGenerator();
    }

    /** @test */
    public function the_factors_of_one_is_an_empty_list()
    {
        $this->assertEquals([], $this->primeGenerator->generate(1));
    }

    /** @test */
    public function the_factors_of_a_prime_number_is_the_prime_number()
    {
        $this->assertEquals([2], $this->primeGenerator->generate(2));
        $this->assertEquals([3], $this->primeGenerator->generate(3));
    }

}