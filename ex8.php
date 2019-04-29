<?php

    print "Insira o preço do primeiro produto: ";
    $a = (int) fgets (STDIN);


    print "Insira o preço do segundo produto: ";
    $b = (int) fgets (STDIN);

    print "Insira o preço do terceiro produto: ";
    $c = (int) fgets (STDIN);


    if ($a < $b and $a < $c)

    {
        
        print "O produto mais barato é: $a \n\n";
    }

    elseif ($b < $a and $b < $c)
    
    {
        
        print "O produto mais barato é: $b \n\n";
    }

    elseif ($c < $a and $c < $b)
    
    {
       
        print "O produto mais barato é: $c \n\n";
    }

    