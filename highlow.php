<?php

$min = 0;
$max = 100;

$randomNumber = rand ( $min , $max );

fwrite(STDOUT, $randomNumber);
fwrite(STDOUT, "Guess the number\n");
$userNumber = trim(fgets(STDIN));


do {
	if ($userNumber < $randomNumber) {
	    fwrite (STDOUT, "Guess higher\n");
		// $userNumber = trim(fgets(STDIN));

	} elseif ($userNumber > $randomNumber) {
	    fwrite (STDOUT, "Guess lower\n");
		// $userNumber = trim(fgets(STDIN));

	} 	

		$userNumber = trim(fgets(STDIN));
	
} while ($userNumber != $randomNumber);

if ($userNumber == $randomNumber){
		fwrite (STDOUT, "Dynamite!\n");
	}




