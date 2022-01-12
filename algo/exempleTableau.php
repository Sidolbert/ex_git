<?php

//création d'éléments de tableaux
$tab[1] = "test";
$tab[8] = "test2";
$tab[] = "où es-tu ?";
$tab["2.5"] = "case décimale";
$tab[8] = 88; //attention : les clés sont uniques dans un tableau PHP !
$tab[] = 35;
print_r($tab);


//pour les tableaux à index
/*for($i=0;$i<count($tab);$i++){
	echo "voici la valeur numero " . $i . " : " . $tab[$i] . "<br/>";
}*/
//pour les tableaux associatifs
foreach($tab as $key=>$element){
	echo "voici la valeur de clé  " . $key . " : " . $element . "<br/>";
}