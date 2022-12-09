<?php
session_start();
if(!isset($_POST['zglos'])){
    header("Location:../formularz_problemy.php");
}
else{
    if(!empty($_POST['antyspam'])){
    header("Location:../formularz_problemy.php");
    } 
    else {
        if(empty($_POST['imie'])||empty($_POST['nazwisko'])||empty($_POST['email'])||empty($_POST['wiadomosc'])){
            $_SESSION['imie'] = $_POST['imie'];
            $_SESSION['nazwisko']  = $_POST['nazwisko'];
            $_SESSION['email']  = $_POST['email'];
            $_SESSION['wiadomosc']  = $_POST['wiadomosc'];
            header("Location:../formularz_problemy.php?blad=nf"); 

        }
        else{
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $email = $_POST['email'];
            $wiadomosc = $_POST['wiadomosc'];
            
            
            $mailto = "admin@kjkenterprise.pl";
            $from = 'Email od:'.$email;
            $subject = 'Zgloszenie problemu od: ' . $imie . ' ' . $nazwisko . '.';
            $headers = 'Content-Type: text/html; charset=utf-8'."\r\n";
            $headers .= 'From: '.$email."\r\n";


            mail($mailto, $subject,$wiadomosc,$headers);
            header("Location:../index.php?email=wyslany");
        }
    }

}
?>