<?php

function noPrime($number) {
	$prime = true;
	for ($i = 2; $i < $number; $i++) {
		if ($number % $i == 0) {
			$prime = false;
		}
	}
	return $prime;
}


function roman($number){
	$romans = array(
		'M' => 1000,
		'CM' => 900,
		'D' => 500,
		'CD' => 400,
		'C' => 100,
		'XC' => 90,
		'L' => 50,
		'XL' => 40,
		'X' => 10,
		'IX' => 9,
		'V' => 5,
		'IV' => 4,
		'I' => 1
	);
	$result = '';
	foreach ($romans as $roman => $value) {
		$matches = intval($number / $value);
		$result .= str_repeat($roman, $matches);
		$number = $number % $value;
	}
	return $result;
}

function romanToDecimal($roman)
{
    $romanNumerals = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $decimal = 0;
    $prevValue = 0;

    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
        $currentValue = $romanNumerals[$roman[$i]];

        if ($currentValue < $prevValue) {
            $decimal -= $currentValue;
        } else {
            $decimal += $currentValue;
        }

        $prevValue = $currentValue;
    }

    return $decimal;
}

// Contoh penggunaan:


