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