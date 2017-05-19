<?php 
include("includes/header.php");
require_once("includes/config.php");
date_default_timezone_set('Europe/Istanbul');
 error_reporting(E_ALL ^ E_DEPRECATED);

//--------------------------------------------------------------------
if(!empty($_GET["temizle"])  && $_GET["temizle"]==1)
{
mysql_query("TRUNCATE TABLE  cihaz5");

	$sorgu=	mysql_query("INSERT INTO cihaz5 (
	 cihazId,
	  adSoyad,
	   guncellemeTarih, 
	   guncellemeSaat,
	    sonSicaklik,
		sonNem,
		sonKarbon, 
		  konumLat, 
		  konumLng) 
		  VALUES ( '5',
		   'Bekir Bedir', 
		   '2017-03-08', 
		   '05:12:07',
		    '21.84', 
			'45.789',
			 '45.7',
			  '40.7696526',
			   '30.3595619')");


if($sorgu){echo "<h1 style=\"margin-top:95px\">Temizleme İşlemi Başarılı</h1>";
echo '<script language="javascript">';
echo 'alert("Tablo Temizlendi \n 1 Satır Eklendi")';
echo '</script>';}	
}

//----------------------------- KAYIT-----------------------
if(!empty($_GET["kayit"]) &&$_GET["kayit"]==1){ //

$sicaklik =$_GET['sicaklik'];
$tarih = date("Y-m-d"); // Geçerli sistem tarihini almak için 
$saat = date("H:i:s"); // Geçerli sistem saatini almak için 
$enlem=$_GET['enlem'];
$boylam=$_GET['boylam'];
$karbon =$_GET['karbon'];
$cid= $_GET['cid'];

$tabloAdi = "cihaz".$cid ;

$bul=mysql_query("Select *from kullanicilar where cihazId=$cid");
	$data=array();
	while($goster=mysql_fetch_assoc($bul))
	{

    $kullaniciAdi=$goster['kullaniciAdi'];
	$telefon1 = $goster['telefon1'];
	$telefon2 = $goster['telefon2'];

	}



//-----------------------------KRİTİK KAYIT-----------------------
if($sicaklik>24 || $karbon>200)
{
echo '<script language="javascript">';
//echo 'alert("çok sıcaaakkk")';
echo '</script>';


$sorgu5=mysql_query("insert into kritikdurumlar (cihazId,guncellemeTarih,guncellemeSaat,sonSicaklik,sonKarbon,adSoyad,tel1,tel2) 
		values(
		'$cid',
		'$tarih',
		'$saat',
		'$sicaklik',
		'$karbon',
		'$kullaniciAdi',
		'$telefon1',
		'$telefon2')");
if($sorgu5)
{
//echo "kritike kaydedildi";
}
}

//-----------------------------KRİTİK KAYIT-----------------------
//-----------------------------Ana Tablo KAYIT-----------------------	
$sorgu=	mysql_query("insert into yanginAlarm (cihazId,guncellemeTarih,guncellemeSaat,sonSicaklik,sonKarbon,adSoyad,tel1,tel2) 
		values(
		'$cid',
		'$tarih',
		'$saat',
		'$sicaklik',
		'$karbon',
		'$kullaniciAdi',
		'$telefon1',
		'$telefon2')");
if($sorgu)
{
echo "yanginAlarma kaydedildi";
}

//-----------------------------Anatablo KAYIT-----------------------
//-----------------------------Cihaz KAYIT-----------------------		
	
		$sorgu2=mysql_query("insert into  .$tabloAdi (cihazId,guncellemeTarih,guncellemeSaat,sonSicaklik,konumLat,konumLng,sonKarbon,adSoyad) 
		values(
		'$cid',
		'$tarih',
		'$saat',
		'$sicaklik',
		'$enlem',
		'$boylam',
		'$karbon',
		'$kullaniciAdi')");

if($sorgu2)
{
//echo "cihaztablosuna kaydedildi";
}

//-----------------------------Cihaz KAYIT-----------------------

}

if( !empty($_GET['cid']) )
{
	$cid= $_GET['cid'];

$tabloAdi = "cihaz".$cid ;

echo "<div class=\"container\">
<div class=\"row\">
<div style=\"background-color:#EDDE5B;padding:10px; margin-bottom:10px; border-radius:10px\">
<h2>Nasıl Çalışır<h2>
<h4>Her cihazın kendi ID'si olur ve tüm kayıtlarını tutar. Bu ID cihaza özeldir ve modülden alınmalıdır(ŞUAN DEĞİL İLERKİ AŞAMA). Gelen get komutu üzerinde bu cihazId alınır ve ona göre cihazın tablosuna eklenir. Ana tablodan cihazID sütununda herhangi bir satırdaki (diyelim cihazID=7) bununla ilgili kolona tıklandığında ilgili satırdan sorgu çeker ve ekrana yazdırır. select *from cihaz7 <h4>
</div>

<div class=\"sayfa-baslik\">
<i class=\"fa fa-rss\"></i> Cihaz Ayrıntı
</div>


<table class=\"table table-responsive table-bordered table-hover\">
	<thead>
		<tr>
			<th>#id</th>
			<th>#cihazId</th>
			<th>Güncelleme Tarih</th>
			<th>Güncelleme Saat</th>
			<th>Son Sıcaklık</th>
			<th>adSoyad</th>
			<th>Son Nem</th>
			<th>Son Karbon</th>
			<th>konumLat</th>
			<th>konumLng</th>
		</tr>
	</thead>
	<tbody>";
$bul=mysql_query("Select *from $tabloAdi order by id desc");
	$data=array();
	while($goster=mysql_fetch_assoc($bul))
	{	
		$id=$goster['id'];
		$cihazId=$goster['cihazId'];
		$adSoyad=$goster['adSoyad'];
		$guncellemeTarih=$goster['guncellemeTarih'];
		$guncellemeSaat=$goster['guncellemeSaat'];
		$sonSicaklik=$goster['sonSicaklik'];
		$sonNem=$goster['sonNem'];
		$sonKarbon=$goster['sonKarbon'];
		$konumLat=$goster['konumLat'];
		$konumLng=$goster['konumLng'];

		if($sonSicaklik>25)
		{
			echo"<tr class=\"danger\">
			<td>$id</td>
			<td>$cihazId</td>

			<td>$guncellemeTarih</td>
			<td>$guncellemeSaat</td>
			<td>$sonSicaklik</td>
						<td>$adSoyad</td>

						<td>$sonNem</td>
									<td>$sonKarbon</td>
										<td>$konumLat</td>
						<td>$konumLng</td>

			</tr>";
		}
		else{
		echo"<tr>
			<td>$id</td>
			<td>$cihazId</td>

			<td>$guncellemeTarih</td>
			<td>$guncellemeSaat</td>
			<td>$sonSicaklik</td>
						<td>$adSoyad</td>
						<td>$sonNem</td>
									<td>$sonKarbon</td>
										<td>$konumLat</td>
						<td>$konumLng</td>

			</tr>";
		}
	}

	echo "</tbody>
</table>

<h2>Get Methodu İle Örnek kayıt ekleme şekli:</h2> <h2>http://blogdene.com/yanginAlarm.php?kayit=1&sicaklik=68</h2>
<h3>kayit = 1 parametresi zorunlu. sicaklik parametresi gelecek veri</h3>
<form action=\"cihazAyrinti.php?temizle=1\" method=\"get\">
    <button type=\"submit\" style=\"padding:35px;font-size:30px\"  class=\"btn btn-danger\"name=\"temizle\" value=\"1\">Tabloyu Temizle</button>

</form>
</div>
</div>";

}



//--------------------------------------------------------------------
if(!empty($_GET["kontrol"])&& $_GET["kontrol"]==1){ //
	//echo $_GET['sicaklik'];
	//echo "kontrol get'ine girdi";	
}	
$bul=mysql_query("Select *from yanginAlarm");
	$data=array();
	while($goster=mysql_fetch_assoc($bul))
	{	
		$id=$goster['id'];
		$cihazId=$goster['cihazId'];
		$adSoyad=$goster['adSoyad'];
		$adres=$goster['adres'];
		$tel1=$goster['tel1'];
		$tel2=$goster['tel2'];
		$guncellemeTarih=$goster['guncellemeTarih'];
		$guncellemeSaat=$goster['guncellemeSaat'];
		$sonSicaklik=$goster['sonSicaklik'];
		$sonNem=$goster['sonNem'];
		$sonKarbon=$goster['sonKarbon'];	
		array_push($data, array(
		'id' => $id,
		'cihazId' => $cihazId,
		'adSoyad' => $adSoyad,
		'adres' => $adres,
		'tel1' => $tel1,
		'tel2' => $tel2,
		'guncellemeTarih' => $guncellemeTarih,
		'guncellemeSaat' => $guncellemeSaat,
		'sonSicaklik' => $sonSicaklik,
		'sonNem' => $sonNem,
		'sonKarbon' => $sonKarbon
		));
	}	
	
		
	//	echo json_encode($data); 













/*
//bu şekilde yapınca obje->list->alt obje şeklinde yapıyor
  	    $bilgiler = array('kelime'=>'kelime','kelime kismi'=>'aciklama kismi');
    //    echo json_encode ($bilgiler); 


        $data=array();
        array_push($data, array(
		'kullaniciAdiE' => kullaniciAdiE,
		'arkadaslar' => arkadaslar,
		'telefonNo' => telefonNo,
		'email' => email,
		'adres' => adres,
		'rol' => rol
		));
        array_push($data, array(
		'kullaniciAdiE' => kullaaniciAdiE,
		'arkadaslar' => arkadaslaar,
		'telefonNo' => telefonNao,
		'email' => emaial,
		'adres' => adreas,
		'rol' => roal
		));
		array_push($bilgiler, $data);
		echo json_encode ($bilgiler); */
include("includes/footer.php");
?>