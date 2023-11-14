<div class="content">

Exercice 1<br>
Parmi les variables suivantes, lesquelles ont un nom valide : mavar, $mavar, $var5,
$_mavar, $_5var, $__élément1, $hotel4* ?
<br><br>
$mavar, $var5, $_mavar, $_5var.
<br><br>
Exercice 2<br>
Donnez les valeurs de $x, $y, $z à la fin du script suivant :<br>
$x="PostgreSQL";<br>
$y="MySQL";<br>
$z=&$x;<br> <!-- Affectation par référencement -->
$x="PHP 8";<br>
$y=&$x;
<br><br>
à la fin : 
    $x = "PHP 8"
    $y = "PHP 8"
    $z = "PHP 8"
    <br><br>
Exercice 3<br>
Lisez les valeurs des variables du script de l’exercice 2 à l’aide du tableau $GLOBALS.
<br><br>
foreach($GLOBALS as $name => $value)
    echo "La variable $name a pour valeur $value ";

    Correction 
echo $GLOBALS['x'], '<br>';
    echo $GLOBALS['y'], '<br>';
    echo $GLOBALS['z'], '<br>';
    
    <br><br>
Exercice 4<br><br>
Déterminez le numéro de version de PHP, le nom du système d’exploitation de votre
serveur ainsi que la langue du navigateur du poste client.
<br><br>
dans cmd php -v

    Correction 
    <?php echo "Version de PHP : ", PHP_VERSION, "<br>";
    echo "Version de l'OS : ", PHP_OS, "<br>";
    echo "Langue du navigateur : ", $_SERVER["HTTP_ACCEPT_LANGUAGE"], "<br>";?>
<br><br>
Exercice 5<br>
Donnez la valeur de chacune des variables pendant et à la fin du script suivant, et
vérifiez l’évolution du type de ces variables :<br>
$x="PHP7";<br>
$a[]=&$x;<br>
$y=" 8e version de PHP";<br>
$z=$y*10;<br>
$x.=$y;<br>
$y*=$z;<br>
$a[0]="MySQL";<br>
<br>
<?php $x="PHP7";
var_dump($x);
echo '<br>';
$a[]=&$x;
var_dump($a);
echo '<br>';
$y=" 8e version de PHP";
var_dump($y);
echo '<br>';
$z=$y*10;
var_dump($z);
echo '<br>';
$x=$y;
var_dump($x);
echo '<br>';
$y=$z;
var_dump($y);
echo '<br>';
$a[0]="MySQL";
var_dump($a[0]);
echo '<br>';
?>
<br>

Exercice 6<br>
Donnez la valeur des variables $x, $y, $z à la fin du script :<br>
$x="7 personnes";<br>
$y=(integer) $x;<br>
$x="9E3";<br>
$z=(double) $x;<br>
<br>
$x = "9E3"
$y = 7
$z = 9000
<br><br>
Exercice 7<br>
Donnez la valeur booléenne des variables $a, $b, $c, $d, $e et $f :<br>
$a="0";<br>
$b="TRUE";<br>
$c=FALSE;<br>
$d=($a OR $b);<br>
$e=($a AND $c);<br>
$f=($a XOR $b);<br>
<br>
$a = N/A FALSE<br>
$b = N/A TRUE<br>
$c = FALSE<br>
$d = TRUE<br>
$e = FALSE<br>
$f = TRUE<br>

<?php

    define('mavar','carton pate');
    echo mavar;
    echo '<br>';
    $baguette="j'ai acheté 12 baguettes ce matin";
    $bag = (double) $baguette;
    $bag1 = (int) filter_var($baguette, FILTER_SANITIZE_NUMBER_INT); 
    echo $bag;
    echo '<br>';
    echo $bag1;

?>

</div>