<?php

    print "A qual sexo você pertence? F/M: ";
    $s = (string) fgetc (STDIN);

    
    if ($s == "F"  or $s == "f")

    {
        print "Feminino \n\n";
        exit;
    }

    if ($s == "m" or $s == "M" )

    {
        print "Masculino \n\n";
        exit;
    }

    if ($s != "F" or $s == "f" or $s == "m" or $s == "M" )

    {
        print "Irformação errada \n\n";
    }