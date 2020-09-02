<?php
function tentukan_nilai($number)
{
    if ($number >= 85 && $number <= 100) {
        return "Sangat Baik \n";
    } else if ($number >= 70 && $number <= 80) {
        return "baik \n";
    } else if ($number >= 60 && $number <= 70) {
        return "cukup \n";
    } else {
        return "kurang \n";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
