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

    /**
     * @dataProvider primeNumbers
     * @test
     */
    public function the_factors_of_a_prime_number_is_the_prime_number($number)
    {
        $this->assertExpectedFactors([$number], $number);
    }

    public function primeNumbers(): array
    {
        return [
            [2],
            [3],
            [5],
            [7],
            [11],
        ];
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