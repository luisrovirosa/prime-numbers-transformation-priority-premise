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
        if ($number > 1) {
            while ($number % $factor == 0) {
                $factors[] = $factor;
                $number /= $factor;
            }

            while ($number % 3 == 0) {
                $factors[] = 3;
                $number /= 3;
            }
        }

        if ($number > 1) {
            $factors[] = $number;
        }

        return $factors;
    }
}