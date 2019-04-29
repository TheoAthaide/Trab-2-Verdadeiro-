<?php

    print "Insira o primeiro número: ";
    $a = (int) fgets (STDIN);


    print "Insira o segundo número: ";
    $b = (int) fgets (STDIN);

    print "Insira o terceiro numero número: ";
    $c = (int) fgets (STDIN);

    print "Insira o quarto número: ";
    $d = (int) fgets (STDIN);

    print "Insira o quarto número: ";
    $e = (int) fgets (STDIN);

    $soma = $a + $b + $c + $d + $e;

    $media = $soma / 5;

    print "A soma desses numeros é igual a $soma, e a media é igual a $media";