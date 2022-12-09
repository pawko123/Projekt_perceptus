<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Template</title>
</head>
<body>
<form action="./skrypty/wysylaniezgloszenia.php" method="post">
        Imie:<input type="text" name="imie"><br>
        Nazwisko:<input type="text" name="nazwisko"><br>
        Email:<input type="text" name="email"><br>
        <textarea name="wiadomosc" placeholder="Tresc wiadomosci"></textarea><br>
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