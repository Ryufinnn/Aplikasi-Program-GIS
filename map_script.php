<?php
if (isset($_GET['search'])){
	$search=$_GET['search'];
} else {
	$search='';
}
?>
<script type="text/javascript">
			//<![CDATA[ 
			var icon_s = new GIcon();
			icon_s.image = 'images/icons/graduation.png';
			icon_s.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
			icon_s.iconSize = new GSize(30, 30);
			icon_s.shadowSize = new GSize(22, 20);
			icon_s.iconAnchor = new GPoint(6, 20);
			icon_s.infoWindowAnchor = new GPoint(5, 1);

			var customIcons = [];
			customIcons['0'] = icon_s;

			function load()
			{
				if (GBrowserIsCompatible() )
				{
					var map = new GMap2(document.getElementById("map")); 
					map.addControl(new GSmallMapControl()); 
					map.addControl(new GMapTypeControl()); 
					map.setCenter(new GLatLng(-0.947331, 100.417263), 12); 
					GDownloadUrl("generatexml.php?search=<?=$search;?>", function(data)
					{
						var xml = GXml.parse(data);
						var markers = xml.documentElement.getElementsByTagName('marker');
						for (var i = 0; i < markers.length; i++ )
						{
							var id_pt = markers[i].getAttribute('id_pt');
							var nama_pt = markers[i].getAttribute('nama_pt');
							var point = new GLatLng(parseFloat(markers[i].getAttribute('lat')), parseFloat(markers[i].getAttribute('lng')) );
							var l1 = markers[i].getAttribute('lat');
							var l2 = markers[i].getAttribute('lng');
							var gb = markers[i].getAttribute('gb');
							var info = markers[i].getAttribute('info');
							var marker = createMarker (point, id_pt, nama_pt, gb, l1, l2, info);
							map.addOverlay(marker);
						}
					});
				}
			}

			function createMarker(point, id_pt, nama_pt, gb, l1, l2, info)
			{
				var marker = new GMarker(point, customIcons[0]);
				var html ='<a href="index.php?pages=view&id='+id_pt+'"><h3>'+nama_pt+'</h3></a><img src="images/pt/'+gb+'" width="250"><br><h4>Fakultas Yang Tersedia :</h4>'+info+'<br><a href="index.php?pages=view&id='+id_pt+'"><button class="btn btn-success btn-sm">Lihat</button></a>' ;
				GEvent.addListener(marker, 'mouseout', function() { marker.openInfoWindowHtml(html); }); return marker;
			}
			//]]>
</script>