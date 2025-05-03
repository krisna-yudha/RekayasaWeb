<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
function curl($url){
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $output = curl_exec($ch);
 curl_close($ch);
 return $output;
}
// alamat localhost untuk file getWisata.php, ambil hasil export JSON
$send = curl("http://localhost:8080/rekayasaweb/Prak2/getwisata.php");
// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

echo "<table>";
echo "<tr>
        <th>Kota</th>
        <th>Landmark</th>
        <th>Tarif</th>
      </tr>";
foreach($data as $row){
 echo "<tr>";
 echo "<td>".$row["kota"]."</td>";
 echo "<td>".$row["landmark"]."</td>";
 echo "<td>".$row["tarif"]."</td>";
 echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
