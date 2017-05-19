<?php include("includes/header.php") ?>
<?php include("includes/config.php") ?>

<?php 
$bul=mysql_query("Select *from kullanicilar order by kullaniciid desc");
	$data=array();
	while($goster=mysql_fetch_assoc($bul))
	{	
		$kullaniciid=$goster['kullaniciid'];
		$adSoyad=$goster['adSoyad'];
        $kullaniciAdi=$goster['kullaniciAdi'];
        $parola=$goster['parola'];
         $telefon1=$goster['telefon1'];
          $telefon2=$goster['telefon2'];
             $konumLat=$goster['konumLat'];
          $konumLng=$goster['konumLng'];
               $adres=$goster['adres'];
          $adresTarifi=$goster['adresTarifi'];
          $cid = $goster['cihazId'];
         

echo "<div class=\"col-md-4\">
<div class=\"panel panel-default\">
      <div class=\"panel-heading\"> <p><i class=\"fa fa-user-o\" ></i> $adSoyad </p></div>
  <div class=\"panel-body\">
    <p><b class=\"cadet\"><i class=\"fa fa-mobile\"></i> Telefon: </b><span class=\"\"> </span>$telefon1 </p>
    <p><b class=\"cadet\"><i class=\"fa fa-mobile\"></i> Telefon: </b><span class=\"\"> </span> $telefon2 </p>
        <p><b class=\"cadet\"><i class=\"fa fa-user-o\" ></i> Kullanıcı Adı: </b><span class=\"\"> </span> $kullaniciAdi </p>
             <p><b class=\"cadet\"><i class=\"fa fa-unlock-alt\"></i> Parola: </b><span class=\"\"> </span> $parola </p>
    <p><b class=\"cadet\"><i class=\"fa fa-globe\"></i> Adres: </b><span class=\"\"> </span> $adres </p>
    <p><b class=\"cadet\"><i class=\"fa fa-globe\"></i> Adres Tarifi: </b><span class=\"\"> </span>  $adresTarifi </p>
  </div>
  <div class=\"panel-footer\">
  <a href=\"ayrintiCihaz.php\" class=\"btn btn-info genislik50\"><i class=\"fa fa-info\"></i> Detay</a>
<a href=\"duzenlecihaz.php?cid=$cid&id=$kullaniciid&adSoyad=$adSoyad&kullaniciAdi=$kullaniciAdi&parola=$parola&telefon1=$telefon1&telefon2=$telefon2&konumLat=$konumLat&konumLng=$konumLng&adres=$adres&adresTarifi=$adresTarifi\" class=\"btn btn-warning genislik50\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Düzenle</a>

<a href=\"silcihaz.php?id=5\" class=\"btn btn-danger genislik50\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i> Sil</a>
  </div>
</div>
</div>";



        
    }
    
?>
	
	


<?php include("includes/footer.php") ?>