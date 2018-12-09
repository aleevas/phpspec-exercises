<?php

class RomanNumeralConverter
{
    protected static $lookup = [
        50 => 'L',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function convert($number)
    {
        $roman = '';
        
        foreach (static::$lookup as $limit=>$r_symbol) {
            
            while ($number >= $limit) {
                $roman .= $r_symbol;
                $number-= $limit;
            }
        }

       return $roman;
    }
}
