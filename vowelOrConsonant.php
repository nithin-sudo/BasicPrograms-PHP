<?php

#taking alphabet from user and checking whether it is vowel or consonant.
$alphabet = readline("Enter a character : ");
if ($alphabet == 'a' || $alphabet == 'e' || $alphabet == 'i' || $alphabet == 'o' || $alphabet == 'u' || $alphabet == 'A' || $alphabet == 'E' || $alphabet == 'I' || $alphabet == 'O' || $alphabet == 'U') 
{
    echo "Entered alphabet " . $alphabet . " is  Vowel";
}
else if (($alphabet >= 'a' && $alphabet <= 'z') || ($alphabet >= 'A' && $alphabet <= 'Z'))
{
    echo "Entered alphabet " . $alphabet . " is   Consonant";
}
else
{
    echo "Enter a alphabet";
}
?>