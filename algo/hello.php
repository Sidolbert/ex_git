<?php

echo "hello PHP !\n";
// le caractère \ permet d'activer des fonctionnalités ou de désactiver les caractères spéciaux
echo("syntaxe alternative "); //attention aux espaces !

//attention : JAMAIS d'espace dans un nom de variable (et les accents c'est pas idéal non plus)
$afficher = readline("entrez un nombre\n");
echo $afficher;
echo "<br/><h1>On fait un titre HTML</h1>";

/* tout ce qui se trouve entre les balises
	est du commentaire

*/

//commentaire en une ligne
//attention : ce qui suit la fermeture de balise n'est pas du PHP !
?>
echo "toto";
<?php
//on recommence à utiliser du PHP !

$a = 53;
$b = 34;
$c = 10;
//attention à la priorité des opérateurs
echo ($a + $b) * $c;
//opérateur de concaténation : la ligne suivante est équivalente à:
/*echo " ";
echo $a;*/
echo " " . $a;
$a = "cinquante-trois";
echo " " . $a;
$d = "35";
$e = "7";
//PHP autorise l'addition de valeurs numériques présentées sous forme de chaînes de caractères
echo $d + $e . "<br/>";
//ATTENTION : PHP autorise des choses un peu baroques sur les additions de chaînes de caractères, avec un simple avertissement au lieu d'une erreur
$e = "sept";
echo $d + $e . "<br/>";
$f = "3test3";
echo $d + $f . "<br/>";
//opérateur de comparaison : == != < <= > >=
if(3 == 5){
	echo "on entre jamais dans cette condition";
}else{
	echo "parce qu'elle est toujours fausse<br/>";
}
//=== : vérifie valeur ET type 
if(3 === "3"){
	echo "égalité<br/>";
}else{
	echo "pas d'égalité<br/>";
}
//pour que le navigateur lise la chaîne en tant que telle et pas comme balise HTML
echo htmlspecialchars("<br/>");


