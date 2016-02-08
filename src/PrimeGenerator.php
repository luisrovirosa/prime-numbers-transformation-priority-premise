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

        $factor = 2;
        while ($number > 1) {
            while ($number % $factor == 0) {
                $factors[] = $factor;
                $number /= $factor;
            }
            $factor++;
        }

        if ($number > 1) {
            $factors[] = $number;
        }

        return $factors;
    }
}