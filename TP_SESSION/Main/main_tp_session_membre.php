<div class="content">
    <?php 
        session_start();


        if(!empty($_SESSION['name'])){
        echo "Bienvenue ".ucfirst($_SESSION['name']);
        echo "<h2>Vous êtes dans votre espace personnel !</h2>";
        echo'<a href="destroy.php">Déconnexion</a>';
        }else{
            echo "Merci de vous identifier pour accéder à votre espace personnel <br>";
            echo '<a href="tp_session.php">Connection</a>';
        }
    ?>
    
    
</div>