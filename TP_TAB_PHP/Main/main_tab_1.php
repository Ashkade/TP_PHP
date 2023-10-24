<?php   
        echo "<h1>Exo1: Création et Accès aux Tableaux</h1><br><br>";
        
        echo "<ul>
            <li>Créez un tableau en PHP contenant les noms de cinq fruits.</li><br>";           

                $tabfuit=["Pomme","Poire","Pêche","Ananas","Melon"];
                print_r($tabfuit);  

            echo '<br><br>---------------------------------------<br>';

            echo "<li>Affichez le deuxième élément du tableau.</li><br>";            

                echo $tabfuit[1];    

            echo '<br><br>---------------------------------------<br><br>';        

            echo "<li>Ajoutez un nouveau fruit à la fin du tableau.</li><br>";

                $tabfuit[]="Cerise";
                print_r($tabfuit);    

            echo '<br><br>---------------------------------------<br><br>'; 
        
            echo "<li>Affichez la taille totale du tableau.</li><br>";

                echo "La taille totale du tableau est ".count($tabfuit);

            echo '<br><br>---------------------------------------<br><br>'; 

            echo "<li>Parcourez le tableau et affichez chaque élément sur une nouvelle ligne.</li><br>";

                for($i=0;$i<count($tabfuit);$i++)
                    echo $tabfuit[$i].'<br>';

            echo '<br><br>---------------------------------------<br><br>'; 
    
        echo "</ul>";
    ?>