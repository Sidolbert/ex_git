<?php

$Reponse = readline("Saisissez votre nombre : ");

$NombrePremier = 0;
$Premier = array();
if ($Reponse >= 2)
{
    $NombrePremier = 1;
    $Premier[0] = 1;
	$Premier[1] = $Reponse;
}

//optimisation : on ne boucle que jusqu'à la racine carrée du nombre
for ($x = 2; $x <= sqrt($Reponse);$x++) 
{
    if ($Reponse % $x == 0) 
    {
        $Premier[] = $x; 
		//si le résultat de la division n'est pas déjà dans le tableau, on l'y ajoute
		if(!in_array($Reponse / $x, $Premier)){
			$Premier[] = $Reponse / $x;
		}
        if ($x != $Reponse) 
        {
            $NombrePremier = 0;
        }
    }
}

if ($NombrePremier == 0)
{
    echo "Votre nombre n'est pas un nombre premier\n";
	sort ($Premier);
    for ($x = 0;$x < count($Premier);$x++)
    {
        echo $Premier[$x] . "\n";
    }
}
else
{
    echo "Votre nombre est un nombre premier\n";
}
