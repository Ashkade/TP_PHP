<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>
<body>
    
    <!-- Exercice 3: Concaténation de Chaînes
    Créez une variable $prenom avec votre prénom.
    Créez une variable $nomComplet en concaténant $prenom, un espace et $nom.
    Affichez le résultat. -->

    <?php

        $prenom = 'Laïd';
        echo $prenom.'<br>';
        $nom = 'BETARI';
        echo $nom.'<br>';
        $nomComplet = $prenom.' '.$nom;
        echo $nomComplet;

    ?>

</body>
</html>