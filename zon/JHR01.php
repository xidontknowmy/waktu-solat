<?php

/* 
	Waktu Solat Johor Zon 1 - Pulau Aur dan Pemanggil
	Salam sayang dari Zul
	Facebook: www.facebook.com/xidontknow
	Twitter: https://twitter.com/xidontknowmy
	Website: http://www.mohdzulhaziq.my 
*/

$api = 'https://api.jomgeek.com/v1/waktusolat/?k=yEoNjYQ7K8tqImHN&a=JHR01.php';
$json = file_get_contents($api);
$retVal = json_decode($json, TRUE);

print 'Zon: Johor 1 - Pulau Aur dan Pemanggil<br>';

print 'Tarikh: ';
$tarikh = $retVal['data']['date'];
print $tarikh;
print '<br>';

print 'Imsak: ';
$imsak = $retVal['data']['item']['Imsak'];
print $imsak;
print '<br>';

print 'Subuh: ';
$subuh = $retVal['data']['item']['Subuh'];
print $subuh;
print '<br>';

print 'Syuruk: ';
$syuruk = $retVal['data']['item']['Syuruk'];
print $syuruk;
print '<br>';

print 'Zohor: ';
$zohor = $retVal['data']['item']['Zohor'];
print $zohor;
print '<br>';

print 'Asar: ';
$asar = $retVal['data']['item']['Asar'];
print $asar;
print '<br>';

print 'Maghrib: ';
$maghrib = $retVal['data']['item']['Maghrib'];
print $maghrib;
print '<br>';

print 'Isyak: ';
$isyak = $retVal['data']['item']['Isyak'];
print $isyak;
print '<br>';