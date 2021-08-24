<?php
#taking a number from user printing it is even or odd.
$evenOrOdd = readline("Enter the number to check if it is even or odd: ");
if ($evenOrOdd % 2 == 0)
{
    echo "$evenOrOdd is even number";
}
else
{
    echo "$evenOrOdd is odd number";
}
?>