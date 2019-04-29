<?php  


    print "insira a primeira nota: ";
    $nota_1 = (int) fgets(STDIN);

    print "insira a segunda nota: ";
    $nota_2 = (int) fgets(STDIN);



    $soma = $nota_1 + $nota_2 ;

    $media = $soma / 2;

    print "Sua media foi igual a $media \n\n";

   
    if ( $media >= 7 and  $media < 10 )

    {
    print "PARABENS!!!!!! Meu consagrado está passado \n\n";
}

if ($media < 7 )

    {
    print "PARABENS!!!!!! Meu consagrado, você é um bosta \n\n";
}


if ($media == 10 )

    {
    print "PARABENS!!!!!! VOCÊ É MUITO FODA MEU CONSAGRADO \n\n";
    
}