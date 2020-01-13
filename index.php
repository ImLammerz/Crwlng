<?php
require ("config.php");
include 'simple_html_dom.php';
//base url
$base = 'http://mantaptap.diskopumkm.com/contact.php';
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, $base);
curl_setopt($curl, CURLOPT_REFERER, $base);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$str = curl_exec($curl);
curl_close($curl);
//// Create a DOM object
$html_base = new simple_html_dom();
//// Load HTML from a string
$html_base->load($str);
//echo $html_base;
$a = '';
foreach($html_base->find('th') as $item)
{$a.= $item->plaintext;}

//find('table')

echo $a;

$sql = "INSERT INTO jeans (papoy) VALUE ('$a')";
$query = mysqli_query($db, $sql);

?>