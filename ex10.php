<?php

print "Digite o 1º valor: ";
$a = (int) fgets(STDIN);

if ($a === 0)

{
    print "Numero 'A' igual a zero, programa cancelado \n\n";
    exit;
}

print "Digite o 2º valor: ";
$b = (int) fgets(STDIN);

print "Digite o 3º valor: ";
$c = (int) fgets(STDIN);


$delta =  pow($b,2) - 4 * $a * $c;

if ($delta < 0)

{
    print "Delta é menor que 0, programa cancelado \n\n";
    exit;
}



print "O delta com esses valores será $delta \n\n";

print "Agora vamos calcular o X1 e o X2 \n\n";

$X1 = (-$b + sqrt($delta)) / (2 * $a);

$X2 = (-$b - sqrt($delta)) / (2 * $a);

print "O valor de X1 é igual a $X1 \n\n";
print "O valor de X2 é igual a $X2 \n\n";
