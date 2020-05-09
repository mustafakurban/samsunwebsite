<?php
include("sifre.php");
session_start();
ob_start();






$eposta = $_POST["username"];



if (($_POST["username"] != "") or ($_POST["password"] != "")) {

    
    if (filter_var($eposta, FILTER_VALIDATE_EMAIL)) {



        if (($_POST["username"] == $user) and ($_POST["password"] == $pass) and (filter_var($eposta, FILTER_VALIDATE_EMAIL))) {
            $_SESSION["login"] = "true";
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;

            echo "Hoşgeldin G191210056";
            header("Refresh: 1;  url=/samsunwebsite/html/sehrim.html");
        } else {
            echo "Kullancı Adı veya Şifre Yanlış.<br>";
            echo "Giriş sayfasına yönlendiriliyorsunuz.";
            header("Refresh: 2;  url=/samsunwebsite/html/sehrim.html");
        }
    } else {
        echo 'e-posta gecersiz!';
        header("Refresh: 1; url=index.php");
    }

   
}

else
{

    echo 'Boş Bırakmayınız';
    header("Refresh: 1; url=index.php");

}

ob_end_flush();




