<?php

print "Insira a base: ";
$base = (int) fgets (STDIN);


print "Insira o expoente: ";
$expoente = (int) fgets (STDIN);

$potencia = 1;
$base2 = $base;

for ($i=1; $i <= $expoente ; $i++) {
    $potencia = $potencia * $base2; 
   
}

print "$base elevado a $expoente potencia é igual a $potencia\n\n";
