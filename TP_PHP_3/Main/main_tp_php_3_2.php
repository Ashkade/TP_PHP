
<?php

    echo "<h2>Exercice 9</h2>";
    echo "<ol>
            <li>Connecter vous à la base casse2 (casse dans mon cas)</li>
            <li>Afficher toutes les personnes qui vivent à Paris ou à Bordeaux,</li>
            <li>Afficher toutes les personnes dont l'âge est compris entre 25 et 40 ans.</li>
            <li>Afficher les personnes dont le nom comprend la lettre \"n\".</li>
        </ol>";

        echo '<br>';
        echo '1. ';

        $conx = mysqli_connect("localhost", "root","","casse");

        if(mysqli_connect_errno()){
            echo "Érreur de connexion à la base ".mysqli_connect_error()."<br>";
        }else{
            echo "La connexion à la BDD casse est fonctionnelle"."<br>";
        }

        echo '<br>';
        echo '2. ';

        $ville = "SELECT Nom, Ville FROM personne WHERE Ville = 'Paris' OR Ville = 'Bordeaux' ORDER BY Nom ASC";

        if($request1 = mysqli_query($conx, $ville)){
            echo "<table width=500>";
            echo "<th>"."Nom"."</th>";
            echo "<th>"."Ville"."</th>";

            while($row = mysqli_fetch_row($request1)){
                echo "<tr>";
                for($i=0;$i<count($row);$i++){
                echo "<td>".$row[$i]."</td>";
            }
                echo "</tr>";
            }

            echo "</table>";

            mysqli_free_result($request1);
        }
   
        echo '<br>';
        echo '3. ';

        $age = "SELECT Nom, Age FROM personne WHERE Age>=25 AND Age<=40 ORDER BY Nom ASC";

        if($request2 = mysqli_query($conx, $age)){
            echo "<table width=500>";
            echo "<th>"."Nom"."</th>";
            echo "<th>"."Age"."</th>";

            while($row = mysqli_fetch_row($request2)){
                echo "<tr>";
                for($i=0;$i<count($row);$i++){
                echo "<td>".$row[$i]."</td>";
            }
                echo "</tr>";
            }

            echo "</table>";

            mysqli_free_result($request2);
        }

        echo '<br>';
        echo '4. ';

        $n = "SELECT Nom FROM personne WHERE Nom LIKE '%n%' ORDER BY Nom ASC";

        if($request3 = mysqli_query($conx, $n)){
            echo "<table width=500>";
            echo "<th>"."Nom"."</th>";

            while($row = mysqli_fetch_row($request3)){
                echo "<tr>";
                for($i=0;$i<count($row);$i++){
                echo "<td>".$row[$i]."</td>";
            }
                echo "</tr>";
            }

            echo "</table>";

            mysqli_free_result($request3);
        }

        mysqli_close($conx);






?>

</div>