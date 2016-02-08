<?php
namespace LuisRovirosa;

class PrimeGenerator
{
    /**
     * @param int $number
     * @return array
     */
    public function generate(int $number): array
    {
        $factors = [];

        while ($number % 2 == 0) {
            $factors[] = 2;
            $number /= 2;
        }

        if ($number > 1) {
            $factors[] = $number;
        }

        return $factors;
    }
}