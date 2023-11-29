<?php

class Validator
{
    public static function string($value , $min = 1 , $max=INF)
    {
        //Trim remove white space
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }
}