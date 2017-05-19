

<?php
include("includes/config.php");
    $locations=array();
    $query =mysql_query('SELECT * FROM kullanicilar');
        while( $row = mysql_fetch_array($query) ){

            $adSoyad = $row['adSoyad'];
             $telefon1 = $row['telefon1'];
            $longitude = $row['konumLng'];
            $latitude = $row['konumLat'];
                        $adres = $row['adres'];

            /* listeyi doldur*/
            $locations[]=array( 'adSoyad'=>$adSoyad, 'lat'=>$latitude, 'lng'=>$longitude,'telefon1'=>$telefon1, 'adres'=>$adres );
        }
        /* verileri jsona �evir */
           $markers = json_encode (json_encode( $locations ));
//echo $markers;

?>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAVhvlenzIy1jmt24fwsR2BHs3q1bTcZxM">
</script>
<?php

	?>
<script type="text/javascript">

<?php echo "var markers=$markers;\n";  ?>

function initialize()
{
	var kordinat=new google.maps.LatLng(40.481614,32.6682218);
	var mapProp = {
  center:kordinat,
  zoom:12,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

 var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
 var infowindow = new google.maps.InfoWindow(), marker, lat, lng,contentStr;
 var bounds = new google.maps.LatLngBounds();
		var json=JSON.parse( markers );

        for( var o in json )
		{
            var lat = json[ o ].lat;
            var lng=json[ o ].lng;
            var adSoyad=json[ o ].adSoyad;
            var telefon1= name=json[ o ].telefon1;
            var adres= name=json[ o ].adres;

			var pos= new google.maps.LatLng(lat,lng);
			bounds.extend(pos);
 contentStr ='<div id="map-info"><p>Kullanıcı:'+ adSoyad+'</p><hr><p>Buraya Son Sıcaklık</p><p>Buraya Son Nem</p><hr><p>İletisim: '+telefon1+'</p><p>Adres: '+adres+'</p></div>';

     /*
          var infowindow = new google.maps.InfoWindow({
          content: contentStr;
        }); */

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat,lng),
                name:adSoyad,
                contentStr:contentStr,
                map: map
            });
            google.maps.event.addListener( marker, 'click', function(e){
                infowindow.setContent(this.contentStr);
                infowindow.open( map, this );
            }.bind( marker ) );

        }
		map.fitBounds(bounds);
		map.panToBounds(bounds);

}

window.onload =initialize;


</script>





