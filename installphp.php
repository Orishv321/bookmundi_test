<?php
$api_url = 'http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml';
$xml_data = simpleXML_load_file($api_url);
$json_data = json_encode($xml_data);
echo $json_data;
