<?php
// Menghubungkan ke MongoDB
// masih miss buat sambungin ke mongodb
$client = new MongoDB\Client("mongodb://localhost:27017");

// Mengakses database dan koleksi
$databaseName = "php_file";
$collectionName = "Users";

$db = $client->$databaseName;
$collection = $db->$collectionName;

// Contoh operasi: Menyimpan dokumen
$data = ["nama" => "John", "usia" => 30];
$collection->insertOne($data);

// Contoh operasi: Membaca dokumen
$result = $collection->findOne(["nama" => "John"]);
echo $result["nama"] . " - " . $result["usia"];
?>
