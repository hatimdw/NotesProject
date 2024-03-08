<?php
// static functions makes us call functions without creating an instance of the class
namespace Core;

class Validator {
    public static function string($value, $min = 1, $max) {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }
}



?>