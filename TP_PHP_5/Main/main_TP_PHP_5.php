<div class="content">
    <?php

        echo "<h2>Exercice 1</h2>";
        echo "<p>Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge de la personne.</p><br>";

        $tab1 = [
            "Nom"=>["Prénom","Ville","Age"],
            "Valjean"=>["Jean","Paris",64],
            "Lelouch"=>["Claude","Lille",73],
            "Strife"=>["Cloud","Midgard",17]
        ];

        var_dump($tab1);

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 2</h2>";
        echo "<p>Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l’âge de la personne avec une série de valeurs associées.</p><br>";

        $tab2 = [
            "Valjean" => ['Prénom'=>'Jean','Ville'=>'Paris','Age'=>64],
            "Lelouch" => ['Prénom'=>'Claude','Ville'=>'Lille','Age'=>73],
            "Strife" => ['Prénom'=>'Cloud','Ville'=>'Midgard','Age'=>17]
        ];

        var_dump($tab2);
        
        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 3</h2>";
        echo "<p>Utilisez une boucle foreach pour lire les tableaux des exercices 1 et 2.</p><br>";

        foreach($tab1 as $clef1 => $data1){
            echo "Donnée ".$clef1;
            foreach($data1 as $info1 => $donnees1){
                echo " ".$donnees1." ";
            }
            echo "<br>";
        }
        echo "<br>";

        foreach($tab2 as $clef2 => $data2){
            echo "Nom ".$clef2." ";
            foreach($data2 as $info2 => $donnees2){
                echo $info2." ".$donnees2." ";
            }
            echo "<br>";
        }
        
        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 4</h2>";
        
        echo "<p>Utilisez une boucle while pour lire les tableaux des exercices 1 et 2.</p><br>";

        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 5</h2>";
        echo "<p>Créez un tableau contenant une liste d’adresses de sites recommandés, puis créez un lien aléatoire vers le premier site de la liste après avoir trié le tableau en ordre aléatoire.</p><br>";
        
        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 6</h2>";
        echo "<p>Créez un tableau d’entiers variant de 1 à 63 puis, à partir de celui-ci, un autre tableau de nombres variant de 0 à 6.3. Créez ensuite un tableau associatif dont les clés X varient de 0 à 6.3 et dont les valeurs sont sin(X). Affichez le tableau de valeurs dans un tableau HTML.</p><br>";
        
        echo '<br><br>---------------------------------------<br><br>';

        echo "<h2>Exercice 7</h2>";
        echo "<p>Créez un tableau contenant une liste d’adresses e-mail. Extrayez le nom de serveur de ces données, puis réalisez des statistiques sur les occurrences de chaque fournisseur d’accès.</p><br>";

    ?>
</div>