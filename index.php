<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)){
    require_once "./skrypty/sprawdzanie_typu.php";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Logowanie</title>
</head>
<body>
    <form action="./skrypty/logowanie.php" method="post">
        Email:<input type="text" name="email"><br>
        Hasło:<input type="password" name="haslo"><br>
        <input type="submit" value="Zaloguj sie">
    </form>
    <span style="color: red;">
            <?php
            $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullurl,"blad=pil")==true){
                echo "Przekroczono ilosc nieudanych logowania. Sprobuj ponownie za 10 minut.";
                goto blad_wykryty;
            }
            else if(strpos($fullurl,"blad=nl")==true){
                echo "Logowanie nieudane. Prosze sprobowac ponownie.";
                goto blad_wykryty;
            }
            blad_wykryty:
            ?>
        </span>
    <a href="formularz_problemy.php">Zglos nam swoj problem</a>
</body>
</html>