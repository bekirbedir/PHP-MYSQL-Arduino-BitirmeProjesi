<?php include("includes/header.php") ?>
<?php include("includes/config.php") ?>

<div class="row">
<?php 

$bul=mysql_query("Select *from kullanicilar order by kullaniciid desc");
	$data=array();
	while($goster=mysql_fetch_assoc($bul))
	{

    $kullaniciAdi=$goster['kullaniciAdi'];
        $cihazId = $goster['cihazId'];
$telefon1 = $goster['telefon1'];


  $cihazBul=mysql_query("Select *from cihaz{$cihazId} order by id desc");

$cihazGoster=mysql_fetch_assoc($cihazBul);
	

        $sonSicaklik=$cihazGoster['sonSicaklik'];
        $sonNem = $cihazGoster['sonNem'];
          $guncellemeSaat = $cihazGoster['guncellemeSaat'];
          $sonKarbon = $cihazGoster['sonKarbon'];
  
         echo "<div class=\"col-xs-4 col-md-3\">
    <div class=\"panel panel-primary\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><a href=\"cihazAyrinti.php?cid=$cihazId\"><i class=\"fa fa-desktop\"></i> Cihaz #$cihazId </a></h3>
  </div>
  <div class=\"panel-body\">
    <p><b> <i class=\"fa fa-user-o\"></i> Kullanıcı</b> : $kullaniciAdi</p>
    <p><b><i class=\"fa fa-mobile\"></i> İletişim</b> :  $telefon1<br></p>
    <p><b>Son Veriler: $guncellemeSaat</b></p>
  <p><i class=\"fa fa-thermometer-empty cadet\"></i> Son Sıcaklık: <span class=\"\"> $sonSicaklik</span></p>
    <p><i class=\"fa fa-leaf cadet\"></i> Son Nem: <span class=\"\"> $sonNem%</span></p>
      <p><i class=\"fa  fa-leaf cadet\"></i> Son Co2: <span class=\"\"> $sonKarbon</span></p>
	</div>
	</div>
  </div>";
  

  }






 ?>

</div>

<?php include("includes/footer.php") ?>