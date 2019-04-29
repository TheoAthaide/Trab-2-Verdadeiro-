<?php

    print "Insira o primeiro número: ";
    $a = (int) fgets (STDIN);

    print "Insira o segundo número: ";
    $b = (int) fgets (STDIN);

    print "Insira o terceiro número: ";
    $c = (int) fgets (STDIN);

    print "Insira o quarto número: ";
    $d = (int) fgets (STDIN);

    print "Insira o quinto número: ";
    $e = (int) fgets (STDIN);

    print "Insira o sexto número: ";
    $f = (int) fgets (STDIN);

    print "Insira o setimo número: ";
    $g = (int) fgets (STDIN);

    print "Insira o oitavo número: ";
    $h = (int) fgets (STDIN);

    print "Insira o nono número: ";
    $i = (int) fgets (STDIN);

    print "Insira o decimo número: ";
    $j = (int) fgets (STDIN);

    $contpar = 0;
    $contimpar = 0;

    if ($a % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($b % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($c % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($d % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($e % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($f % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($g % 2 == 0)
    {
        $contpar = $contpar+ + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($h % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($i % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    if ($j % 2 == 0)
    {
        $contpar = $contpar + 1;
    }

    else{
        $contimpar = $contimpar + 1;
    }

    print "Existem $contpar numeros pares \n\n";
    print "Existem $contimpar numeros impares \n\n";