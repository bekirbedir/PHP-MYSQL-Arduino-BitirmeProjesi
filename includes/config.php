<?php


$db_adres="localhost";
$db_user="root";
$db_pass="";
$db_tablo="bitirme";

$conn=mysql_connect($db_adres,$db_user,$db_pass);





if(!$conn)
{
die("Baglanti Hatasi".mysql_error());
}

$db_select= mysql_select_db($db_tablo,$conn);

if(!$db_select)
{
die("bağlantı Hatasi".mysql_error());	
}


mysql_query("SET NAMES utf8");
//ob_start();
//if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>