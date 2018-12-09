<?php

class RomanNumeralConverter
{
    public function convert($number)
    {
        $roman = '';

        while ($number >= 50) {
            $roman .= 'L';
            $number-= 50;
        }

        while ($number >= 10) {
            $roman .= 'X';
            $number-= 10;
        }

        if ($number >= 5) {
            $roman .= 'V';
            $number-= 5;
        }

        $roman .= str_repeat('I', $number);

       return $roman;
    }
}
