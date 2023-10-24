<?php

        echo "<h1>Exo2 Manipulation de Tableau</h1><br><br>";

        echo "<ul>
            <li>Créez un tableau associatif en PHP contenant les noms des étudiants et leurs notes (par exemple, 'Alice' => 18, 'Bob' => 15, etc.).</li><br>";           

                $notes =[
                   'Alice'=>18,
                   'Bob'=>15,
                   'Claude'=>12,
                   'Carmen'=>8,
                   'Jean'=>10
                ];
                print_r($notes);
                echo '<br><br>';
                foreach ($notes as $etudiant=>$note){
                    echo $etudiant." a la note suivante ".$note.'<br>';
                }

            echo '<br><br>---------------------------------------<br>';

            echo "<li>Affichez la note de l'étudiant 'Alice'.Modifiez la note de 'Bob' à 17.</li><br>";

                echo $notes['Alice'];
                echo "<br>";
                $notes['Bob']=17;
                echo $notes['Bob'];
                
            echo '<br><br>---------------------------------------<br><br>';        

            echo "<li>Ajoutez un nouvel étudiant 'Charlie' avec une note de 16.</li><br>";

                $notes['Charlie']=16;
                print_r($notes);
                    

            echo '<br><br>---------------------------------------<br><br>'; 
        
            echo "<li>Calculez la moyenne des notes des étudiants et affichez-la.</li><br>";

                $cumul = 0;
                foreach($notes as $etudiant=>$note){
                    $cumul=$cumul+$note;
                }
                $moyenne=$cumul/count($notes);
                echo $moyenne;
                
    
        echo "</ul>";

    ?>