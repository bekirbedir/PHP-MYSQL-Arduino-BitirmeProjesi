<?php 
include("includes/header.php");
require_once("includes/config.php");
date_default_timezone_set('Europe/Istanbul');
 error_reporting(E_ALL ^ E_DEPRECATED);


if(!empty($_GET["temizle"])&& $_GET["temizle"]==1)
{
mysql_query("TRUNCATE TABLE  yanginAlarm");

	$sorgu=	mysql_query("insert into yanginAlarm (cihazId,adSoyad,adres,tel1,tel2,guncellemeTarih,guncellemeSaat,sonSicaklik,sonNem,sonKarbon) 
		values(
		'1',
		'Bekir Bedir',
		'Ankara',
		'5051266678',
		'5547369248',
		'2017-05-23',
		'19:19',
		'20.59',
		'39.7',
		'4.1')");


			if($sorgu){echo "<h1 style=\"margin-top:95px\">Temizleme İşlemi Başarılı</h1>";
			echo '<script language="javascript">';
echo 'alert("Tablo Temizlendi \n 1 Satır Eklendi")';
echo '</script>';}	
}
if(!empty($_GET["kayit"])&&$_GET["kayit"]==1){ 

$sicaklik =$_GET['sicaklik'];
$tarih = date("Y-m-d"); // Geçerli sistem tarihini almak için 
$saat = date("H:i:s"); // Geçerli sistem saatini almak için 
$cihazID= $_GET['cid'];
$karbon = $_GET['karbon'];

//$tabloAdi = "cihaz"+$cihazId;

$sorgu=	mysql_query("insert into yanginAlarm ('cihazId',guncellemeTarih,guncellemeSaat,sonSicaklik,sonKarbon) 
		values(
		'$cihazID',
		'$tarih',
		'$saat',
		'$sicaklik',
		'$karbon')");
if($sorgu)
{
echo "yanginAlarma kaydedildi";
}
/*
$sorgu3=	mysql_query("insert into "+$tabloAdi+" ('cihazId',guncellemeTarih,guncellemeSaat,sonSicaklik,sonKarbon) 
		values(
		'$cihazID',
		'$tarih',
		'$saat',
		'$sicaklik',
		'$karbon')");
if($sorgu)
{
echo "yanginAlarma kaydedildi";
}
*/


//-----------------------------KRİTİK KAYIT-----------------------
if($sicaklik>21)
{
echo '<script language="javascript">';
echo 'alert("çok sıcaaakkk")';
echo '</script>';



$sorgu2 = mysql_query("insert into kritikDurumlar (cihazId,guncellemeTarih,guncellemeSaat,sonSicaklik,sonKarbon) values('$cihazID',$tarih','$saat','$sicaklik','$karbon')");

if($sorgu2)
{
echo "kritik duruma kaydoldu";
}

}
//-----------------------------KRİTİK KAYIT-----------------------

/*
			$mesaj="Kayıt Başarıyla oluşturulmuştur";
			if($sorgu){
				echo "<h1>Kayıt Başarıyla Eklendi</h1><br>";
				echo "Eklenen Sicaklik = $sicaklik<br>";
				echo "Ekleme Tarih =$tarih<br>";
				echo "Ekleme Saati = $saat<br>"; 
					}
					*/

}

else
{
	
echo "<div class=\"container\">
<div class=\"row\">
<div class=\"breadcrumb\">
<h2>Güncelleme:<h2>
<h4>Cihaz Ayrıntı Tablosu Eklendi..<h4>
<h4>Bu tablonun get parametreleri örnek olarak kayit=1 sicaklik=x enlem=x boylam=x<4>
<h4 style=\"color:#2400FF\" > blogdene.hol.es/cihazAyrinti.php?kayit=1&sicaklik=55&enlem=40.54&boylam=39.5456 şeklinde olmalıdır<h5>
</div>


<div class=\"sayfa-baslik\">
<i class=\"fa fa-rss\"></i> Son Güncellemeler
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
			<th>adres</th>
			<th>tel1</th>
			<th>tel2</th>
			<th>Son Nem</th>
			<th>Son Karbon</th>
			<th>Ayrıntılar</th>
		</tr>
	</thead>
	<tbody>";
$bul=mysql_query("Select *from yanginAlarm order by id desc");
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
		if($sonSicaklik>25)
		{
			echo"<tr class=\"danger\">
			<td>$id</td>
			<td>$cihazId</td>
			
			<td>$guncellemeTarih</td>
			<td>$guncellemeSaat</td>
			<td>$sonSicaklik</td>
						<td>$adSoyad</td>
						<td>$adres</td>
						<td>$tel1</td>
						<td>$tel2</td>
						<td>$sonNem</td>
									<td>$sonKarbon</td>
									<td><a href=\"yapim_asamasi.php\">tikla..</td>
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
						<td>$adres</td>
						<td>$tel1</td>
						<td>$tel2</td>
						<td>$sonNem</td>
									<td>$sonKarbon</td>
									<td><a href=\"yapim_asamasi.php\">tikla..</td>
			</tr>";
		}
	}	
	
	echo "</tbody>
</table>	

<h2>Get Methodu İle Örnek kayıt ekleme şekli:</h2> <h2>http://blogdene.hol.es/yanginAlarm.php?kayit=1&sicaklik=68</h2>
<h3>kayit = 1 parametresi zorunlu. sicaklik parametresi gelecek veri</h3>
<form action=\"yanginAlarm.php?temizle=1\" method=\"get\">
    <button type=\"submit\" style=\"padding:35px;font-size:30px\"  class=\"btn btn-danger\"name=\"temizle\" value=\"1\">Tabloyu Temizle</button>
</form>
</div>
</div>";

}



//--------------------------------------------------------------------
if(!empty($_GET["kontrol"])){ //
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

include("includes/footer.php");
?>

