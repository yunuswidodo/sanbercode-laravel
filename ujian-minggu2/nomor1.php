<?php

function hitung($string_data)
{
    $len = strlen($string_data);
    $first = "";
    $operator = "";
    $second = "";
    $flag = 0;

    for ($i = 0; $i < $len; $i++) {
        if ($string_data[$i] == '*' || $string_data[$i] == ':' || $string_data[$i] == '+' || $string_data[$i] == '-' || $string_data[$i] == '%') {
            $flag = 1;
            $operator = $string_data[$i];
        } else if ($flag == 0) {
            $first .= $string_data[$i];
            // echo $first;
        } else if ($flag == 1) {
            $second .= $string_data[$i];
            // echo $second;
        }
    }

    $first = (int)$first; // mengconvert variable $first menjadi integer agar bisa dihitung
    $second = (int)$second; // mengconvert variable $second menjadi integer agar bisa dihitung

    if ($operator == '*') {
        return $first * $second;
    } else if ($operator == ':') {
        return $first / $second;
    } else if ($operator == '+') {
        return $first + $second;
    } else if ($operator == '-') {
        return $first - $second;
    } else if ($operator == '%') {
        return $first % $second;
    }
}
echo hitung("102*2") . "\n";
echo hitung("2+3") . "\n";
echo hitung("100:5") . "\n";
echo hitung("10%2") . "\n";
echo hitung("99-2") . "\n";
