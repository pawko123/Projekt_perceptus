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
                echo "Przekroczono limit logowan.Sprobuj ponownie za 10 minut";
                goto wykryto_blad;
            }
            elseif(strpos($fullurl,"blad=nl")==true){
                echo "NIeudane logowanie. Prosze sprobowac ponownie.";
                goto wykryto_blad;
            }
            wykryto_blad:
            ?>
        </span>
        <span style="color: green;">
            <?php
            $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullurl,"email=wyslany")==true){
                echo "Email zgloszeniowy zostal wyslany poprawnie";
            }
            ?>
        </span>
    <a href="formularz_problemy.php">Zglos nam swoj problem</a><br>
    <a href="zapomniane_haslo.php">zapomniales hasla?</a>
</body>
</html>