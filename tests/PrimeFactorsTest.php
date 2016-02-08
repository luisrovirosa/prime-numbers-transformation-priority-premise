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
        $this->assertExpectedFactors([], 1);
    }

    /** @test */
    public function the_factors_of_a_prime_number_is_the_prime_number()
    {
        $this->assertExpectedFactors([2], 2);
        $this->assertExpectedFactors([3], 3);
    }

    /**
     * @param $factors
     * @param $number
     */
    private function assertExpectedFactors($factors, $number)
    {
        $this->assertEquals($factors, $this->primeGenerator->generate($number));
    }

}