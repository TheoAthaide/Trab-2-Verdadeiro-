<?php

    print "Insira a letra: ";
    $a = ( string ) fgetc (STDIN);


    if ($a == 'A' or $a == 'E' or $a == 'I' or $a == 'O' or $a == 'U' or $a == 'a' or $a == 'e' or $a == 'i' or $a == 'o' or $a == 'u'  )

    
    {
     print "Vogal";
    }

    else 
    {
        print "consoante";
    }

