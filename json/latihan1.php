<?php 

// $mahasiswa =[
//   [

//     "nama" => "tri ilma ramadani",
//     "nim" => "2217020146",
//     "email" => "triilmaramadani23@gmail.com"

//   ],
//    [

//     "nama" => "ilma",
//     "nim" => "2217020146",
//     "email" => "ilma@gmail.com"
//    ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=surat_masuk','root','');
$db = $dbh->prepare('SELECT * FROM user');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>