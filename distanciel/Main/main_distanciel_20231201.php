<div class="content">
    <?php
        
        echo "<h2>Exerice 1:  Créer le script php appelant le javscript</h2>";
        echo "<p>Créez une fonction PHP qui affiche une boîte d'alerte à partir de la fonction JavaScript dont la syntaxe est alert(\"chaine_de caractères\"). Cette fonction peut être appelée avec comme paramètre le texte du message à afficher. Elle est particulièrement utile pour afficher des messages d’erreur de manière élégante, sans que ces derniers restent écrits dans la page.La fonction retourne la valeur TRUE. Ceci n’est pas obligatoire mais peut permettre un contrôle d’exécution.</p>";

        function JsAlert($string){
            echo "<script>alert('$string')</script>";
            return true;
        }        

        JsAlert("toto");
    ?>
</div>