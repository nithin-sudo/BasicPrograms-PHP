<?php

#taking two numbers from user and swapping that two numbers.
$numberOne = readline("Enter the first number: ");
$numberTwo = readline("Enter the second number: ");
$temp = $numberOne;
$numberOne = $numberTwo;
$numberTwo = $temp;
echo "Numbers after Swapped \nnumberOne: ".$numberOne."\nnumberTwo: ".$numberTwo;
?>