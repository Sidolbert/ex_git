<?php

echo "Devinez un nombre\nTapez Entrée pour continuer!";


$min=0;
$max=100;

for ($i=0;$i<5;$i++){ 
$x=rand($min,$max);
 echo $x . "\n"; 
 echo "Est-ce que le numéro est correct? \n Si plus grand tapez + \n Si plus petit tapez - \n"; 
  $reponse= readline ("Si c'est exact tapez OK \n");
  echo $reponse;
     if ($reponse == "+") {
		 $min=$x+1;
    echo "Le nombre est plus grand\n";
}

else if ($reponse=="-"){
	$max=$x-1;
  echo "Le nombre est plus petit\n";
}

else if ($reponse=="OK"){
	  echo "Bravo! \n"; 
  break;
}
}
?>