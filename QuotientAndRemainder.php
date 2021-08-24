<?php

#taking the number and divisor from user and calculating quotient and remainder
$input = readline("Enter the number: ");
$divisor = readline("enter divisor: ");
$quotient = $input / $divisor;
$remainder = $input % $divisor;
echo "the quotient is: ".$quotient."\nand remainder is: ".$remainder;
?>