<div class="content">
    <h2>Accéder à votre espace membre</h2>

    <?php
    session_start();
    @$login = $_POST['login'];
    @$password = $_POST['pwd'];
    @$validate = $_POST['valid'];
    $error = "";

    function connectDb(){

        $connexion = mysqli_connect("localhost", "root", "", "membership");
    
        if(mysqli_connect_errno()){
            echo "erreur de connexion à la base ".mysqli_connect_error();
            exit();
        }
        return $connexion;
    }
    $con = connectDb();

    $dblogin = "SELECT user, password_ FROM member WHERE user LIKE '$login'";
    $result = mysqli_query($con,$dblogin) or die("Échec de la récupération du mot de passe");
    $row = mysqli_fetch_row($result);
    if(isset($validate)){
        if($login == $row[0] && MD5($password) == $row[1]){
            $_SESSION["Se connecter"]="Yes";
            header("location:tp_session_membre.php");
        }else{
            $error = "Wrong login or password";
        }
    }

    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login session en php</title>
</head>
<body>
    
<form action="" method="POST">
    <div class="label">Login</div>
    <input type="text" name="login" value="<?php echo $login;?>">
    <br>
    
    <div class="label">Password</div>
    <input type="password" name="pwd" value="">
    <br>

    <input type="submit" name="valid" value="Authentif">
    <a href="tp_session_create.php">Créer votre compte</a>
</form>

<?php if(!empty($error)){
    ?>
    <div id="error"><?=$error?>
</div>
<?php } ?>
	
</body>
</html>
</div>