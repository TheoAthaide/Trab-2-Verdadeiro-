<?php

print "Insira o primeiro número: ";
    $a = (int) fgets (STDIN);


    print "Insira o segundo número: ";
    $b = (int) fgets (STDIN);

    print "Insira o terceiro numero número: ";
    $c = (int) fgets (STDIN);

    print "Insira o quarto número: ";
    $d = (int) fgets (STDIN);

    print "Insira o quinto número: ";
    $e = (int) fgets (STDIN);

    if ($a > $b and $a > $c and $a > $d and $a > $e )

    {
        print "O maior valor é $a \n\n";
    }

    if ($b > $a and $b > $c and $b > $d and $b > $e )

    {
        print "O maior valor é $b \n\n";
    }

    if ($c > $b and $c > $a and $c > $d and $c > $e )

    {
        print "O maior valor é $c \n\n";
    }

    if ($d > $b and $d > $c and $d > $a and $d > $e )

    {
        print "O maior valor é $d \n\n";
    }

    if ($e > $b and $e > $c and $e > $d and $e > $a )

    {
        print "O maior valor é $e \n\n";
    }