<?php
#taking array values from user. 

$numOfValues = readline("enter how many values you want to store: ");
echo "Enter the elements of the array: ";
for ($i=0; $i < $numOfValues ; $i++) 
{ 
    $numbers = array(readline());
}
$maximumValue = $numbers[0];

#checking and printing  the maximum value among three numbers.
for ($i=0; $i < count($numbers) ; $i++)
{ 
    if ($numbers[$i] > $maximumValue) 
    {
        $maximumValue = $numbers[$i];
    }
}
echo "maximum value among three numbers is :".$maximumValue;
?>