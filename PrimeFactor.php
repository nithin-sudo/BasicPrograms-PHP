<?php

#calculating prime factors for the given number.
function primeFactor($number)
{
    echo "The Prime Factors of $number are :";
    for ($i=2; $i <= $number ; $i++) 
    { 
        while($number % $i == 0)
        {
            $number = $number/$i;
            echo "\n".$i;
        }
    }
}

#taking a number from user and calling the function.
$input= readline("Enter the number to which prime factors be calculated: ");
primeFactor($input)
?>