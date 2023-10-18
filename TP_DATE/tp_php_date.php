<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>TP PHP Date</title>
</head>
<body>


    TP 1: Afficher la Date Actuelle <br><br>
    Affichez la date actuelle au format "AAAA-MM-JJ HH:MM:SS".
    <br>
    <?php
    echo date('Y-m-d H:i:s');
    echo '<br>';
    ?>
    <br>
    TP 2: Afficher le Jour de la Semaine <br><br>
    Affichez le nom du jour de la semaine correspondant à la date actuelle.
    <br>

    <?php
    setlocale(LC_TIME, 'French');
    echo strftime("%A");
    echo "<br>";

    $actu = date('D');
    echo $actu;
    ?>
    <br>
    TP 3: Calculer l'Âge <br><br>
    Créez une variable $anneeDeNaissance et attribuez-y l'année de naissance d'une personne. <br>
    Utilisez la date actuelle pour calculer et afficher l'âge de cette personne. <br>

    <?php

    $anneeDeNaissance = 1984;
    $age = strftime('%Y')-$anneeDeNaissance;
    echo $age;
    echo '<br>';
    
    ?>

    <br>
    TP 4: Formater une Date Personnalisée <br><br>
    Créez une variable $date contenant une date au format "JJ/MM/AAAA". <br>
    Affichez cette date au format "AAAA-MM-JJ". <br>

    <?php



    $d = "29/07/2018";
    $dt = DateTime::createFromFormat('d/m/Y',$d);
    $dateAF = $dt->format('Y-m-d');
    echo $dateAF;


    ?>

</body>
</html>