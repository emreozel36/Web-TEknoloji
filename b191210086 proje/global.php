<?php


$url="login.html";

function Yonlendir($url,$zaman=0)
{
    if($zaman!=0){
        header("Refresh:$zaman; url=$url");
    }
    else {
        header("Location:$url");
    }
}
$eposta = "b191210086@sakarya.edu.tr";
$sifre="1234";
if ( $_POST{'email'}==$eposta and $_POST{'password'}==$sifre){ 
    echo "HOŞGELDİNİZ b191210086 Yönlendiriliyorsunuz";
    Yonlendir("http://localhost/proje/index.html",3);
 } else {
 
     echo "Hatalı giriş yaptınız!!! Yönlendiriliyorsunuz";
     Yonlendir("http://localhost/proje/login.html",3);
 }
?>