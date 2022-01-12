<?php

//attention aux simple et double quotes !
$chaine2 = "des trucs";
$chaine1 = "je teste $chaine2";
echo $chaine1;
echo "<br/>";
$chaine1 = 'je teste $chaine2';
echo $chaine1;

//plus sûr
$chaine1 = "je teste" . $chaine2 ;

