<?php
#taking the input from the user and printing Nth Harmonic value.
$initialValue = 1;
$harmonicNumber = 0;
$input = readLine("Enter the number until which harmonic number should generate: ");
for ($i=1; $i<$input; $i++)
{ 
    $value = $initialValue/$i;
    $harmonicNumber += $value;
}
echo "the Nth harmonic number is: ".$harmonicNumber
?>