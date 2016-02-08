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

    /** @test */
    public function the_factors_of_a_power_of_2_is_composed_by_two()
    {
        $this->assertExpectedFactors([2, 2], 4);
        $this->assertExpectedFactors([2, 2, 2], 8);
        $this->assertExpectedFactors([2, 2, 2, 2], 16);
        $this->assertExpectedFactors([2, 2, 2, 2, 2], 32);
    }

    /** @test */
    public function the_factors_of_a_power_of_3_is_composed_by_threes()
    {
        $this->assertExpectedFactors([3, 3], 9);
        $this->assertExpectedFactors([3, 3, 3], 3 * 3 * 3);
        $this->assertExpectedFactors([3, 3, 3, 3], 3 * 3 * 3 * 3);
        $this->assertExpectedFactors([3, 3, 3, 3, 3], 3 * 3 * 3 * 3 * 3);
    }

    /** @test */
    public function the_factors_of_multiples_primes_are_the_primes()
    {
        $this->assertExpectedFactors([2, 3, 5, 7, 11, 17], 2 * 3 * 5 * 7 * 11 * 17);
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