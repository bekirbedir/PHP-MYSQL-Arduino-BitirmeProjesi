<?php include("includes/header.php") ?>
<?php include("includes/config.php") ?>

<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />


<?php 




if(!empty($_GET["kayit"]))
{
$adSoyad = $_POST["adSoyad"];
$kullaniciAdi = $_POST["kullaniciAdi"];
$parola = $_POST["parola"];
$telefon1 = $_POST["telefon1"];
$telefon2 = $_POST["telefon2"];
$konumLat = $_POST["konumLat"];
$konumLng = $_POST["konumLng"];
$adres = $_POST["adres"];
$adresTarifi = $_POST["adresTarifi"];
$cihazId = $_POST["cihazId"];
echo $cihazId;
echo $adSoyad;
echo $kullaniciAdi;
echo $parola;
echo $telefon2 ;
echo $telefon1 ;
echo $konumLat;
echo $konumLng;
echo $adres;
echo $adresTarifi;
echo "insert into kullanicilar (
    cihazId,adSoyad,kullaniciAdi,parola,telefon1,telefon2,konumLat,konumLng,adres,adresTarifi) values
     ('$cihazId','$adSoyad','$kullaniciAdi','$parola','$telefon1','$telefon2','$konumLat','$konumLng','$adres','$adresTarifi')";
     


$query_ekle= mysql_query("insert into kullanicilar (
    cihazId,adSoyad,kullaniciAdi,parola,telefon1,telefon2,konumLat,konumLng,adres,adresTarifi) values
     ('$cihazId','$adSoyad','$kullaniciAdi','$parola','$telefon1','$telefon2','$konumLat','$konumLng','$adres','$adresTarifi') ");

if($query_ekle)
{
 
echo "\nBaşarıyla Kaydedildi";
}
   $query_olustur = "CREATE TABLE cihaz{$cihazId} (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cihazId int DEFAULT NULL,
  adSoyad text COLLATE utf8_turkish_ci,
  guncellemeTarih date DEFAULT NULL,
  guncellemeSaat time DEFAULT NULL,
  sonSicaklik double DEFAULT NULL,
  sonNem double DEFAULT NULL,
  sonKarbon double DEFAULT NULL,
  konumLat double DEFAULT NULL,
  konumLng double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;";

$query_ekl= mysql_query($query_olustur);
if($query_ekl){
    echo "basarili";
}






}

?>

<div class="col-md-6 col-md-offset-3">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title"><i class="fa fa-plus-circle" aria-hidden="true"></i> Yeni Kullanıcı Ekle</h1>

        </div>
        <div class="panel-body">

            <form method="POST" action="yenicihaz.php?kayit=1">
                <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i> </span>
                        <input type="text" placeholder="Kullanıcı Ad Soyad Girin" class="form-control" name="adSoyad" id="adSoyad">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">


                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Kullanıcı Adı Girin" class="form-control" name="kullaniciAdi" id="kullaniciAdi">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Kullanıcıya Parola Girin" class="form-control" name="parola" id="parola">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Telefon Numarası Girin" class="form-control" name="telefon1" id="telefon1">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>

                        <input type="text" placeholder="Alternatif Telefon Numarası Girin" class="form-control" name="telefon2" id="telefon2">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>

                        <input type="text" placeholder="Cihaza ID Girin" class="form-control" name="cihazId" id="cihazId">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>

                        <input type="text" placeholder="Konum Lat Bilgisi Girin" class="form-control" name="konumLat" id="konumLat">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>

                        <input type="text" placeholder="Konum Lng Girin" class="form-control" name="konumLng" id="konumLng">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-address-book" aria-hidden="true"></i></span>

                        <input type="text" placeholder="Adres Bilgisi Girin" class="form-control" name="adres" id="adres">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Adresin Sözel tarifini Girin" class="form-control" name="adresTarifi" id="adresTarifi">
                    </div>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</button>
            </form>


        </div>
    </div>
</div>




<?php include("includes/footer.php") ?>