<div class="content">

    <?php

        echo "<h2>Exercice 1</h2>";

        echo "<p>Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple
        de 3 et de 5.</p>";

        $multiple = 10;

        echo "Le nombre choisi est $multiple.<br>";

        if($multiple%3==0)
            echo "C'est un multiple de 3.<br>";
        else
            echo "Ce n'est pas un multiple de 3.<br>";
        if($multiple%5==0)
            echo "C'est un multiple de 5.<br>";
        else
            echo "Ce n'est pas un multiple de 5.<br>";

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 2</h2>";

        echo "<p>Écrivez une expression conditionnelle utilisant les variables \$age et \$sexe dans une
        instruction if pour sélectionner une personne de sexe féminin dont l’âge est compris
        entre 21 et 40 ans et afficher un message de bienvenue approprié.</p>";

        $age = 25;
        $sexe = "masculin";

        if(($age>=21&&$age<=40) && ($sexe=="féminin"))
            echo "La personne se définie comme étant de sexe féminin et son âge est compris entre 21 ans et 40 ans";
        else
            echo "La personne ne se définie pas comme étant de sexe féminin ou son âge n'est pas compris entre 21 ans et 40 ans";

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 3</h2>";

        echo "<p>Effectuez une suite de tirages de nombres aléatoires jusqu’à obtenir une suite composée
        d’un nombre pair suivi de deux nombres impairs.</p>";

        $nbr1 = rand(1,100);
        $nbr2 = rand(1,100);
        $nbr3 = rand(1,100);

        while($nbr1%2==0&&$nbr2%2!=0&&$nbr3%2!=0){
            $nbr1 = rand(1,100);
            $nbr2 = rand(1,100);
            $nbr3 = rand(1,100);
        }

        echo "Le premier nombre est $nbr1, le deuxième est $nbr2 et le troisième est $nbr3.";

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 4</h2>";

        echo "<p>Créez et affichez des numéros d’immatriculation automobile (pour Paris, par exemple)
        en commençant au numéro 100 PHP 75. Effectuez ensuite la même procédure en mettant
        en réserve les numéros dont le premier groupe de chiffres est un multiple de 100.
        Stockez ces numéros particuliers dans un tableau.</p>";

        $plaquepart=[];
        for($i=100;$i<=999;$i++){
            $plaque2=' PHP 75';
            $plaquefinale=$i.$plaque2;
            console_log($plaquefinale);
            if($i%100==0){
                $plaquepart[]=$plaquefinale;
            }
        }
        var_dump ($plaquepart);

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 5</h2>";

        echo "<p>Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et
        comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les
        tirages, et affichez le nombre de coups réalisés. Réalisez ce script d’abord avec
        l’instruction while puis avec l’instruction for.</p>";

        $nbrchoise = 515;
        $nbrrand = rand(100,999);
        $compteur=0;
        while($nbrchoise!=$nbrrand){
            $nbrrand = rand(100,999);
            $compteur++;
        }
        echo "Le nombre de tirage nécessaire pour obtenir le nombre $nbrchoise est le suivant : $compteur, avec la boucle while.<br><br>";

        $nbrchoise=426;
        
        for($compteur=0;$nbrchoise!=$nbrrand;$compteur++){
            $nbrrand = rand(100,999);
        }
        echo "Le nombre de tirage nécessaire pour obtenir le nombre $nbrchoise est le suivant : $compteur, avec la boucle for.";

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 6</h2>";

        echo "<p>Créez un tableau dont les indices varient de 11 à 36 et dont les valeurs sont des lettres
        de A à Z. Lisez ensuite ce tableau avec une boucle for puis une boucle foreach, et
        affichez les indices et les valeurs (la fonction chr(n) retourne le caractère dont le code
        ASCII vaut n).</p>";

        $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        echo "La suite de caractères renseignés est la suivante pour \$table : ";
        for($i=11;$i<=36;$i++){
            $table[$i]=$alphabet[rand(0,25)];
            echo $table[$i];
        }
        
        echo "<br>";
        
        echo "La suite de caractères renseignés est la suivante pour \$table2 : ";
        for($i=11;$i<=36;$i++){
            $table2[$i]=substr($alphabet,$i-11,1);
            echo $table2[$i];
        }
        
        echo "<br>";
        echo "<br>";
        $dump1 = var_export($table, true);
        console_log($table);
        $dump2 = var_export($table2, true);
        console_log($table2);

        echo "Les indices et les valeurs de \$table1 sont les suivant :<br>";

        for($i=0;$i<count($table);$i++){            
            echo "L'index ".($i+11)." a pour valeur ".$table[$i+11].". ";
        }
        
        echo "<br>";
        echo "<br>";

        echo "Les indices et les valeurs de \$table2 sont les suivant :<br>";

        foreach($table2 as $index=>$value)
            echo "L'index $index a pour valeur $value. ";

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 7</h2>";

        echo "<p>Utilisez une boucle while pour déterminer le premier entier obtenu par tirage aléatoire
        qui soit un multiple d’un nombre donné. Écrivez la variante utilisant la boucle do…while.</p>";

        $_int=5;
        $_multi=rand(1,100);
        while($_multi%$_int!=0){
            $_multi=rand(1,100);
        }
        echo $_int." est un multiple de ".$_multi; 

        echo "<br>";
        echo "<br>";

        $_int2=7;
        do{
            $_multi2=rand(1,100);
        }
        while($_multi2%$_int2!=0);
        echo $_int2." est un multiple de ".$_multi2; 

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 8</h2>";

        echo "<p>Recherchez le PGCD (plus grand commun diviseur) de deux nombres donnés. Gérez au
        moyen d’une exception le cas où au moins un des nombres n’est pas entier.</p>";

        $nbrpgcd1=rand(1,1000);
        $nbrpgcd2=rand(1,1000);

        if(is_int($nbrpgcd1)!=TRUE){
            echo "Le nombre $nbrpgcd1 n'est pas un nombre entier.";
        }elseif(is_int($nbrpgcd2)!=TRUE){
            echo "Le nombre $nbrpgcd2 n'est pas un nombre entier.";
        }else{
            $gcd = GCD($nbrpgcd1, $nbrpgcd2);
            echo "Le plus grand commun diviseur de $nbrpgcd1 et $nbrpgcd2 est $gcd.";
        }
        echo '<br><br>---------------------------------------<br><br>';


        //fonction qui permet d'écrire l'argument donné dans le console.log en utilisant JS
        function console_log($output, $with_script_tags = true) {
            $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
            ');';
            if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
            }
            echo $js_code;
            }

        //Fonction pour le calcul du PGMD
        function GCD($num1, $num2) {
                while ($num2 != 0){
                    $t = $num1 % $num2;
                    $num1 = $num2;
                    $num2 = $t;
                }
                return $num1;
            }

    ?>