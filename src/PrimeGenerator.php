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

        if ($number > 1) {
            while ($number % 2 == 0) {
                $factors[] = 2;
                $number /= 2;
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