<div class="content">

    <?php

        echo "<h1>TP Table 2</h1><br><br>";

        echo "<p>Manipuler les tableaux en PHP, initialiser, ajouter, rechercher les éléments et l'afficher les tableaux.</p><br><br>";

        echo "<ul>";
            echo "<li>Créez un tableau associatif appelé \$personne avec les clés \"nom\", \"prénom\" et \"âge\". Initialisez ces clés avec les valeurs correspondantes.</li><br>";

                $personne=[
                    'Nom'=>'VALJEAN',
                    'Prenom'=>'Jean',
                    'Age'=>32
                ];
                $personne1=[
                    ['Nom'=>'VALJEAN','Prenom'=>'Jean','Age'=>32],
                    ['Nom'=>'MOUTARDE','Prenom'=>'Colonel','Age'=>19],
                    ['Nom'=>'D\'ARC','Prenom'=>'Jeanne','Age'=>17],
                    ['Nom'=>'ANNISTON','Prenom'=>'Jennifer','Age'=>42],
                ];

                print_r($personne);

            echo '<br><br>---------------------------------------<br><br>';

            echo "<li>Créez un tableau numérique appelé \$nombres contenant les nombres de 1 à 10.</li><br>";

                for($i=1;$i<=10;$i++){
                    $nombres[]=$i;
                }
                print_r($nombres);



            echo '<br><br>---------------------------------------<br><br>';

            echo "<li>Ajoutez un élément avec la clé \"ville\" au tableau \$personne avec la valeur de votre choix.</li><br>";

                $personne['ville']='paris';
                print_r($personne);
            
            echo '<br><br>---------------------------------------<br><br>';

            echo "<li>Ajoutez les nombres de 11 à 20 au tableau \$nombres.</li><br>";

                for($i=11;$i<=20;$i++){
                    $nombres[]=$i;
                }
                print_r($nombres);

            echo '<br><br>---------------------------------------<br><br>';

            echo "<li>Vérifiez si le tableau \$nombres contient le nombre 15. Affichez un message indiquant si le nombre est présent ou non.</li><br>";
            
                for($i=0;$i<count($nombres);$i++){
                    if($nombres[$i]===15){
                        echo 'Le nombre 15 est présent';
                    }
                }                

            echo '<br><br>---------------------------------------<br><br>';

            echo "<li>Affichez le nom et l'âge de la personne à partir du tableau \$personne.</li><br>";

                echo $personne['Nom'].' '.$personne['Age'];
                // for($i=0;$i<count($personne)-1;$i++){
                //     print_r($personne[$i]);
                //     echo '<br>';
                // }
                

            echo '<br><br>---------------------------------------<br><br>';

            echo "<li>Utilisez une boucle pour afficher tous les éléments du tableau \$nombres.</li><br>";

                for($i=0;$i<count($nombres);$i++){
                    echo $nombres[$i].' ';                    
                }

            echo '<br><br>---------------------------------------<br><br>';

            echo "<li>Utilisez une boucle foreach pour afficher tous les éléments du tableau \$personne.</li><br>";

                foreach($personne as $personne)
                    echo $personne.'<br>';

            echo '<br><br>---------------------------------------<br><br>';
            

        echo "</ul>";

    ?>

</div>