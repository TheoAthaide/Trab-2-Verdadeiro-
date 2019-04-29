<?php

    $ini1 = 0;
    $ini2 = 1;
    $ini3 = 1;

    print "$ini1 \n$ini2 \n";

    while ($ini3 <= 500){

    

    $ini3 = $ini1 + $ini2;
    $ini1 = $ini2;
    $ini2 = $ini3;

    print "$ini3  \n";
}
