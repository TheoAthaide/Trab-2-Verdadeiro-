<?php

    print "Insira o primeiro número: ";
    $a = (int) fgets (STDIN);


    print "Insira o segundo número: ";
    $b = (int) fgets (STDIN);

    if ($a > $b)

    {
        print "O maior valor é $a \n\n";
    }

    if ($b > $a)

    {
        print "O maior valor é $b \n\n";
    }