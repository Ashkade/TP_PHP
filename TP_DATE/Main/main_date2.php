<div class="content">
<br>    
Exercice 1 : Création et Affichage de Variables <br><br>
Créez une variable appelée $nom et attribuez-lui votre nom <br>
Créez une variable appelée $age et attribuez-lui votre âge. <br>
Affichez ces variables en utilisant echo. <br>

<?php

    $nom = 'Laïd BETARI';
    $age = '39 ans';
    echo 'Je m\'appelle '.$nom.' et mon âge est '.$age;
?>

<br><br><br>
Exercice 2 :   Opérations sur les variables <br><br>
Créez une variable $anneeDeNaissance et attribuez-lui l'année de naissance. <br>
Calculez votre âge en soustrayant $anneeDeNaissance de l'année actuelle et stockez le résultat dans une nouvelle variable $ageCalcule. <br>
Affichez la phrase "J'ai X ans." en utilisant la variable $ageCalcule. <br>

<?php

$anneeDeNaissance = 1984;
$ageCalcule = strftime('%Y')-$anneeDeNaissance;
echo "J'ai ".$ageCalcule.' ans';


?>
</div>