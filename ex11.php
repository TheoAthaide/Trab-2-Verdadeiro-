<?php

 

 print "Informe um número: " ;
 $numero = (int) fgets(STDIN);
 
 if ($numero < 1000) 
  {

$centena = floor(  ($numero/100)  );
$dezena = floor(  (($centena*100)-$numero)/10*-1  ); 
$unidade =floor(  (($centena*100 + $dezena*10 - $numero)*-1)  );
  }

if ($numero >= 1000 or $numero <= 0)
{

print"O número digitado está incorreto. " ;
}

print" $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;




