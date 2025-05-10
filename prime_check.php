<?php

// Заданное число
$number = 29;

if ($number <= 1) {
    echo "$number не является простым числом.";
} else {
    $isPrime = true;
    $i = 2;

    while ($i <= sqrt($number)) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
        $i++;
    }

    if ($isPrime) {
        echo "$number является простым числом.";
    } else {
        echo "$number не является простым числом.";
    }
}

?>
