<?php
#Accepting year as an argument and checking it is leap year or not.
function leapYear($year)
{
    if((($year % 4 == 0 && ($year % 100 != 0)) || ($year % 400 ==0)))
        echo "$year is a Leap Year";
    else
    echo "$year is not a Leap Year";   
}

#Taking input year from the user and calling the function.
$year = readline("Enter a year to check whether it is leap year or not: ");
leapYear($year);
?>