<?php
#Asking user to how many times wants to flip the coin and
$heads = 0;
$tails = 0 ;
$flips = 0;
$input = readline("Enter how many time you want to flip the coin: ");
if($input <= 0)
{
    echo "Enter a number which is greater than 0";
}
else
{
    for ($i=0; $i < $input ; $i++) 
    { 
        if (rand(0,1) < 0.5)
        {
            $tails++;
        }
        else
        {
            $heads++;
        }
        $flips++;
    }
    #Calculating head and tail percentage by using percentage formula.
    $tailPercentage = ($tails * 100)/$flips;
    $headPercentage = 100 - $tailPercentage;
    echo "no.of heads are: ".$heads. "and tails are: " .$tails. " and flips are: ".$flips;
    echo "\nhead percentage is: ".$headPercentage."\ntail percentage is: ".$tailPercentage;
}
?>