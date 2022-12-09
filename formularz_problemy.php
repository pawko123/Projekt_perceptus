<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Template</title>
</head>
<body>
<form action="./skrypty/wysylaniezgloszenia.php" method="post">
        <?php
        session_start();
        ?>
        <input type="text" name="antyspam" style="display: none;">
        Imie:<input type="text" name="imie" 
        <?php 
        if(isset($_SESSION['imie'])){
            echo ' value="' . $_SESSION['imie'] . '"';
            unset($_SESSION['imie']);
        }
        ?>>
        <br>
        Nazwisko:<input type="text" name="nazwisko"
        <?php 
        if(isset($_SESSION['nazwisko'])){
            echo ' value="' . $_SESSION['nazwisko'] . '"';
            unset($_SESSION['nazwisko']);
        }
        ?>>
        <br>
        Email:<input type="text" name="email"
        <?php 
        if(isset($_SESSION['email'])){
            echo ' value="' . $_SESSION['email'] . '"';
            unset($_SESSION['email']);
        }
        ?>>
        <br>
        <textarea name="wiadomosc"><?php 
        if(isset($_SESSION['wiadomosc'])){
            echo ''.$_SESSION['wiadomosc'].'';
            unset($_SESSION['wiadomosc']);
        }
        ?></textarea><br>
        <input type="submit" name="zglos" value="Wyslij zgloszenie">
    </form>
    <span style="color: red;">
    <?php
            $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullurl,"blad=nf")==true){
                echo "Prosimy wypelnic wszystkie pola formularza";
            }
        ?>
    </span>
</body>
</html>