<?php

    print "Insira o primeiro numero: ";
    $a = (int) fgets (STDIN);


    print "Insira o segundo numero: ";
    $b = (int) fgets (STDIN);

    print "Insira o  terceiro numero: ";
    $c = (int) fgets (STDIN);


     if ($a > $b and $a > $c and $b>$c)

    {
        
        print "A ordem é $a , $b, $c \n\n";
    }
    elseif ($b > $a and $b > $c and $a>$c)

    {
        
        print "A ordem é $b , $a, $C \n\n";
    }
 
    elseif ($b > $a and $b > $c and $c>$a)

    {
        
        print "A ordem é $b , $c, $a \n\n";
    }
   elseif ($a > $c and $a > $c and $c > $a)

    {
        
        print "A ordem é $a , $c, $b \n\n";
    }

    
   elseif ($b > $a and $b > $c and $a>$c)

    {
        
        print "A ordem é $b , $a, $C \n\n";
    }
 
    elseif ($b > $a and $b > $c and $c>$a)

    {
        
        print "A ordem é $b , $c, $a \n\n";
    }

    elseif ($c > $a and $c > $b and $a>$b)

    {
        
        print "A ordem é $c, $a, $b \n\n";
    }
 
    elseif ($c > $b and $c > $a and $b>$a)

    {
        
        print "A ordem é $c, $b, $a \n\n";
    }