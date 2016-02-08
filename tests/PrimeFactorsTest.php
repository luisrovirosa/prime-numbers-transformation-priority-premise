<?php

namespace LuisRovirosa\Tests;

use LuisRovirosa\PrimeGenerator;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function the_factors_of_one_is_an_empty_list()
    {
        $primeGenerator = new PrimeGenerator();
        $this->assertEquals([], $primeGenerator->generate(1));
    }

    /** @test */
    public function the_factors_of_a_prime_number_is_the_prime_number()
    {
        $primeGenerator = new PrimeGenerator();
        $this->assertEquals([2], $primeGenerator->generate(2));
    }

}