<div class="content">

    <?php

        echo "<h2 class=\"moncul\">Exercice 1</h2>";
        
        echo "<p>Transformez une chaîne écrite dans des casses différentes afin que chaque mot ait une initiale en majuscule.</p>";

        $string1 = "AlOrS qUe Je rEgArDe aU LoIn";
        echo "Chaîne de charactères à transformer est la suivante : $string1";
        echo "<br>";
        // Dans un premier temps je passe ma variable tout en minuscule
        $string1 = strtolower($string1);
        echo "La chaîne passée en minuscule : $string1<br>";
        $string1 = ucwords($string1);
        echo "La chaîne finale : $string1";

        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 2</h2>";
        
        echo "<p>En utilisant la fonction strlen(), écrivez une boucle qui affiche chaque lettre de la chaîne \"PHP MySQL\" sur une ligne différente.</p>";

        $string2 = "PHP MySQL";
        echo "La chaîne à décomposer est la suivante : $string2 <br>";
        for($i=0;$i<strlen($string2);$i++){
            echo "Le charactère n°".$i." de la chaîne de charactère ".$string2." est \"".substr($string2,$i,1)."\".<br>";
        }

        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 3</h2>";
        
        echo "<p>Formatez l’affichage d’une suite de chaînes contenant des noms et prénoms en respectant les critères suivants : un prénom et un nom par ligne affichés sur 20 caractères ; toutes les initiales des mots doivent se superposer verticalement.</p>";

        $firstname1 = "Valjean";
        $firstname2 = "Coty";
        $firstname3 = "Strife";
        $firstname4 = "Lightbringer";
        $lastname1 = "Jean";
        $lastname2 = "René";
        $lastname3 = "Cloud";
        $lastname4 = "Uther";

        echo sprintf ("%'_-20s %'_-20s",$firstname1,$lastname1)."<br>";
        echo sprintf ("%'_-20s %'_-20s",$firstname2,$lastname2)."<br>";
        echo sprintf ("%'_-20s %'_-20s",$firstname3,$lastname3)."<br>";
        echo sprintf ("%'_-20s %'_-20s",$firstname4,$lastname4);

        // dans ce cas pour sprintf ("format désiré - %=>revoit à l'argument suivant // '=>justifié à gauche //  _=>charactère de remplissage // -20s=> formatage dans un champs de 20 charactères alignés à gauche",argument ou variable à formater) 

        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 4</h2>";
        
        echo "<p>Utilisez les fonctions adéquates afin que la chaîne <form action=\"script.php\"> soit affichée telle quelle et non comme du code HTML.</p>";

        $string4 = '<form action="script.php">';
        echo htmlentities($string4);

        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 5</h2>";
        
        echo "<p>À partir de deux chaînes quelconques contenues dans des variables, effectuez une comparaison entre elles pour pouvoir les afficher en ordre alphabétique naturel.</p>";

        $string5_1="J'aime le pain";
        $string5_2="Mais c'est encore meilleur si il est chaud";

        $string5_1 = strtolower($string5_1);
        $string5_2 = strtolower($string5_2);

        if($string5_1<$string5_2)
            echo $string5_1." est avant ".$string5_2;
        else
            echo $string5_2." est avant ".$string5_1;



        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 6</h2>";
        
        echo "<p>Effectuez une censure sur des textes en n’affichant pas ceux qui contiennent le mot zut.</p>";

        $string6="\"Je ne l'ai pas dit, encore une fois! − Si, vous l'avez dit. − Non! − Si! − Zut! Vous m'embêtez à la fin!\"(Courteline, Ronds-de-cuir, 1893, p. 179)";
        $target= array("Zut","zUt","zuT","ZUt","zUT","ZuT","ZUT");
        $censorship="Censuré !";
        $censoredstring = str_replace($target,$censorship,$string6);
        
        echo "La Phrase non-censurée est la suivante :<br>".$string6;
        echo "<br>";
        echo "La Phrase censurée est la suivante :<br>".$censoredstring;

        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 7</h2>";
        
        echo "<p>Créez une fonction de validation d’une adresse HTTP ou FTP en vous inspirant de l’exemple 4-13.</p>";

        function validurl1($url){
            $test=@fopen($url,"r");
            if($test){
                fclose($test);
                echo "Le test de ".$url." a un retour positif.<br>";
            }else{
                echo "Le test n'a pas fontionné.<br>";
            }
        }

        function validurl2($url2){
            if (!filter_var($url2, FILTER_VALIDATE_URL) === false) {
                echo("URL est valide.<br>");
              } else {
                echo("URL n'est pas valide.<br>");
              }
        }

        $strurl1="http://www.google.com";
        $strurl2="/gogle!com";
        $strurl3="https://github.com/Ashkade";
        $strurl4="tps/github/Ashkade";

        validurl1($strurl1);
        validurl2($strurl1);
        validurl1($strurl2);
        validurl2($strurl2);
        validurl1($strurl3);
        validurl2($strurl3);
        validurl1($strurl4);
        validurl2($strurl4);

        #correction

        function validhttp($vald){
            $modele = "/^(www)\.([a-z0-9]+)(\.|=)?([a-z0-9]*)\.([a-z]{2-4}$)/";
            $vald=strtolower($vald);
            if(preg_match($modele,$vald)){
                echo "$vald est valide <br>";
                return TRUE;
            }else{
                echo "$vald est invalide <br>";
                return FALSE;
            }
        }

        validhttp($strurl1);
        validhttp($strurl2);
        validhttp($strurl3);
        validhttp($strurl4);

        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 8</h2>";
        
        echo "<p>Créez une expression régulière pour valider un âge inférieur à 100 ans.</p>";

        function agetest($age){
            $pattern="/^[1-9][0-9]?$/";
            if(preg_match($pattern,$age)==true)
                echo "L'age renseigné $age est un age valide.<br>";
            else
                echo "L'age renseigné $age n'est pas un age valide.<br>";
        }

        $agerand;

        for($i=0;$i<10;$i++){
            $agerand=rand(0,200);
            agetest($agerand);
        }

        echo '<br><br>---------------------------------------<br><br>';
        
        echo "<h2>Exercice 9</h2>";
        
        echo "<p>Dans la chaîne PHP \n est meilleur \n que ASP \n et JSP \n réunis, remplacez les
        caractères \n par <br /> en utilisant deux méthodes différentes (une fonction ou une
        expression régulière).</p>";

        $string9 ="PHP \n est meilleur \n que ASP \n et JSP \n réunis";

        // fonction
        echo nl2br($string9);

        echo"<br><br>";

        $target9= "\n";
        $replacement="<br>";
        $newstring9 = str_replace($target9,$replacement,$string9);

        echo $newstring9;

        echo"<br><br>";

        // expression régulière

        echo preg_replace("/\n/", "<br>",$string9);

    ?>

</div>