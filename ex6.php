<?php

    print "Insira o primeiro número: ";
    $a = (int) fgets (STDIN);


    print "Insira o segundo número: ";
    $b = (int) fgets (STDIN);

    print "Insira o terceiro número: ";
    $c = (int) fgets (STDIN);

    if ($a > $b and $a > $c)

    {
        print "O maior valor é $a \n\n";
    }

    if ($b > $a and $b > $c)

    {
        print "O maior valor é $b \n\n";
    }

    if ($c > $a and $c > $b)

    {
        print "O maior valor é $c \n\n";
    }