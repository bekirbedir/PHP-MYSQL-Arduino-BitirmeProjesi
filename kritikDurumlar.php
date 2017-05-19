<?php 
include("includes/header.php");
require_once("includes/config.php");
date_default_timezone_set('Europe/Istanbul');
 error_reporting(E_ALL ^ E_DEPRECATED);
//--------------------------------------------------------------------
if(!empty($_GET["temizle"])  && $_GET["temizle"]==1)
{
mysql_query("TRUNCATE TABLE  kritikDurumlar");

	$sorgu=	mysql_query("insert into kritikDurumlar (cihazId,adSoyad,adres,tel1,tel2,guncellemeTarih,guncellemeSaat,sonSicaklik,sonNem,sonKarbon) 
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





echo "<div class=\"container\">
<div class=\"row\">

<div style=\"background-color:#EDDE5B;padding:10px; margin-bottom:10px; border-radius:10px\">
<h2>Nasıl Çalışır<h2>
<h4>Gelen Kayıtlardan sıcaklık değeri 21'in üzerinde olan kayıtlar bu tabloya kaydedilir.
\n  /yanginAlarm.php VEYA /cihazAyrinti.php Hangi sayfaya geldiği farketmeksizin 21in üzeri bu sayfaya da kaydolur<h4>
</div>

<div class=\"sayfa-baslik\">
<i class=\"fa fa-exclamation\"></i> Kritik Durumlar
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
$bul=mysql_query("Select *from kritikDurumlar order by id desc");
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
	
	echo "</tbody>
</table>	

<h2>Get Methodu İle Örnek kayıt ekleme şekli:</h2> <h2>http://blogdene.com/yanginAlarm.php?kayit=1&sicaklik=68</h2>
<h3>kayit = 1 parametresi zorunlu. sicaklik parametresi gelecek veri</h3>
<form action=\"kritikDurumlar.php?temizle=1\" method=\"get\">
    <button style=\"padding:35px;font-size:30px\"  type=\"submit\"  class=\"btn btn-danger\"name=\"temizle\" value=\"1\">Tabloyu Temizle</button>
 
</form>
</div>
</div>";

include("includes/footer.php");

?>