<?php include("includes/header.php") ?>
<?php include("includes/config.php") ?>

<link rel="stylesheet" type="text/css"  href="font-awesome/css/font-awesome.css"/> 
	

<?php 

if(!empty($_GET["duzenle"]))
{
$kullaniciid=$_GET["id"];
$adSoyad = $_POST["adSoyad"];
$kullaniciAdi = $_POST["kullaniciAdi"];
$parola = $_POST["parola"];
$telefon1 = $_POST["telefon1"];
$telefon2 = $_POST["telefon2"];
$konumLat = $_POST["konumLat"];
$konumLng = $_POST["konumLng"];
$adres = $_POST["adres"];
$adresTarifi = $_POST["adresTarifi"];
echo $adSoyad;
echo $kullaniciAdi;
echo $parola;
echo $telefon2 ;
echo $telefon1 ;
echo $konumLat;
echo $konumLng;
echo $adres;
echo $adresTarifi;


$query_duzen=  mysql_query("UPDATE kullanicilar SET adSoyad = '$adSoyad',
 kullaniciAdi = '$kullaniciAdi',
  parola = '$parola',
  telefon1 = '$telefon1',
   telefon2 = '$telefon2', 
   konumLat = '$konumLat', 
   konumLng = '$konumLng', 
   adres = '$adres', 
   adresTarifi = '$adresTarifi'
    WHERE kullaniciid = $kullaniciid");

if($query_duzen)
{
    echo "\nBaşarıyla Kaydedildi";
}
return;
}

//----------------------İd ile Giriş------------------------------------------------
else if(!empty($_GET["id"])){
$kullaniciid = $_GET["id"];
$cihazId= $_GET["cid"];
$adSoyad = $_GET["adSoyad"];
$kullaniciAdi = $_GET["kullaniciAdi"];
$parola = $_GET["parola"];
$telefon1 = $_GET["telefon1"];
$telefon2 = $_GET["telefon2"];
$konumLat = $_GET["konumLat"];
$konumLng = $_GET["konumLng"];
$adres = $_GET["adres"];
$adresTarifi = $_GET["adresTarifi"];

echo <<<EOF
<div class="col-md-6 col-md-offset-3">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title"><i class="fa fa-plus-circle" aria-hidden="true"></i> Yeni Kullanıcı Ekle</h1>

        </div>
        <div class="panel-body">

            <form method="POST" action="duzenlecihaz.php?duzenle=1&id=$kullaniciid">
               <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon input-duzenle"><i class="fa fa-user-o" aria-hidden="true"></i> Ad Soyad </span>
                        <input type="text" value=$adSoyad placeholder="Kullanıcı Ad Soyad Girin" class="form-control" name="adSoyad" id="adSoyad">
                    </div>
                </div>
                   <div class="form-group">
                    <div class="input-group">


                        <span class="input-group-addon input-duzenle"><i class="fa fa-user" aria-hidden="true"></i> Kullanıcı Adı </span>
                        <input type="text" value=$kullaniciAdi placeholder="Kullanıcı Adı Girin" class="form-control" name="kullaniciAdi" id="kullaniciAdi">
                    </div>
                </div>
               <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon input-duzenle"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Parola </span>
                        <input type="text" value=$parola placeholder="Kullanıcıya Parola Girin" class="form-control" name="parola" id="parola">
                    </div>
                </div>

                  <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon input-duzenle"><i class="fa fa-mobile" aria-hidden="true"></i> Telefon1 </span>
                        <input type="text" value=$telefon1 placeholder="Telefon Numarası Girin" class="form-control" name="telefon1" id="telefon1">
                    </div>
                </div>

               <div class="form-group">
                    <div class="input-group">

                        <span class="input-group-addon input-duzenle"><i class="fa fa-mobile" aria-hidden="true"></i> Telefon2 </span>

                        <input type="text" value=$telefon2 placeholder="Alternatif Telefon Numarası Girin" class="form-control" name="telefon2" id="telefon2">
                    </div>
                </div>
                  <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon input-duzenle"><i class="fa fa-globe" aria-hidden="true"></i> Cihaz ID </span>

                        <input type="text" value=$cihazId placeholder="Cihaza ID Girin" class="form-control" name="cihazId" id="cihazId">
                    </div>
                </div>
                   <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon input-duzenle"><i class="fa fa-globe" aria-hidden="true"></i> Konum Lat </span>

                        <input type="text" value=$konumLat placeholder="Konum Lat Bilgisi Girin" class="form-control" name="konumLat" id="konumLat">
                    </div>
                </div>
             <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon input-duzenle"><i class="fa fa-globe" aria-hidden="true"></i>Konum Lng</span>

                        <input type="text" value=$konumLng placeholder="Konum Lng Girin" class="form-control" name="konumLng" id="konumLng">
                    </div>
                </div>

              
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon input-duzenle"><i class="fa fa-address-book" aria-hidden="true"></i> Adres </span>

                        <input type="text" value=$adres placeholder="Adres Bilgisi Girin" class="form-control" name="adres" id="adres">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon input-duzenle"><i class="fa fa-address-book" aria-hidden="true"></i> Adres Tarifi</span>
                        <input type="text" value=$adresTarifi placeholder="Adresin Sözel tarifini Girin" class="form-control" name="adresTarifi" id="adresTarifi">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Düzenle</button>
            </form>


        </div>
    </div>
</div>


EOF;

return;

}
//-----------------------id ile giris----------------------------------------------

?>



<div class="col-md-6 col-md-offset-3">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title"><i class="fa fa-plus-circle" aria-hidden="true"></i> Yeni Kullanıcı Ekle</h1>

        </div>
        <div class="panel-body">

            <form method="POST" action="yeniCihaz.php?kayit=1">
                <div class="form-group">
                    <label for="email">Ad Soyad</label>
                    <input type="text" placeholder="Kullanıcı Ad Soyad Girin" class="form-control" name="adSoyad" id="adSoyad">
                </div>
                <div class="form-group">
                    <label for="pwd">Kullanıcı Adı</label>
                    <input type="text" placeholder="Kullanıcı Adı Girin" class="form-control" name="kullaniciAdi" id="kullaniciAdi">
                </div>
                <div class="form-group">
                    <label for="pwd">Parola</label>
                    <input type="text" placeholder="Kullanıcıya Parola Girin" class="form-control" name="parola" id="parola">
                </div>

                <div class="form-group">
                    <label for="pwd">Telefon1</label>
                    <input type="text" placeholder="Telefon Numarası Girin" class="form-control" name="telefon1" id="telefon1">
                </div>

                <div class="form-group">
                    <label for="pwd">Telefon2</label>
                    <input type="text" placeholder="Alternatif Telefon Numarası Girin" class="form-control" name="telefon2" id="telefon2">
                </div>
                <div class="form-group">
                    <label for="pwd">KonumLat</label>
                    <input type="text" placeholder="Konum Lat Bilgisi Girin" class="form-control" name="konumLat" id="konumLat">
                </div>
                  <div class="form-group">
                    <label for="pwd">KonumLng</label>
                    <input type="text" placeholder="Konum Lng Girin" class="form-control" name="konumLng" id="konumLng">
                </div>

                <div class="form-group">
                    <label for="pwd">Adres</label>
                    <input type="text" placeholder="Adres Bilgisi Girin" class="form-control" name="adres" id="adres">
                </div>
                <div class="form-group">
                    <label for="pwd">Adres Tarifi</label>
                    <input type="text" placeholder="Adresin Sözel tarifini Girin" class="form-control" name="adresTarifi" id="adresTarifi">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Düzenle</button>
            </form>


        </div>
    </div>
</div>




<?php include("includes/footer.php") ?>