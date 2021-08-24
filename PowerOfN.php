<?php

#taking the input N from user and printing powers of 2 till N is reached.
$input = readline("Enter N value till which powers of 2 to be printed: ");
for ($i=0; $i <= $input; $i++) 
{ 
    $value = pow(2,$i);
    echo "\n2 power of $i is $value";
}
?>