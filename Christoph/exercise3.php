<?php

function highestValue($par) {
        $value = 0;
        foreach ($par as $number) {
            if ($number >= $value) {
                $value = $number;
            };
        }
        return $value;
}

$randomNumber = array();
for ($i = 0; $i <= 10; $i++) {
    $randomNumber[$i] = rand();
};
$highestNumber = highestValue($randomNumber);
echo $highestNumber;