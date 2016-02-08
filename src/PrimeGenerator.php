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
            $factors[] = $number;
        }

        return $factors;
    }
}