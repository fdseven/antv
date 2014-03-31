<?php

// sisipkan cek.php untuk keamanan
include "cek.php";

// koneksi ke mysql
mysql_connect("localhost", "tryme", "hacked");
mysql_select_db("antv2");

// membaca nilai ID file yang berasal dari link download.php?id=...
$id      = $_GET['id'];

// membaca username yang sedang login melalui session
$username = $_SESSION['username'];

// query untuk mencari data file yang akan didownload dalam database
$query   = "SELECT * FROM schedule WHERE id = $id";

$hasil   = mysql_query($query);
$data    = mysql_fetch_array($hasil);

// mencocokkan username pemilik file  dengan username yang sedang login
if ($username == $data['username'])
{
   // bila usernamenya cocok maka file boleh didownload
   header("Content-Disposition: attachment; filename=".$data['name']);
   header("Content-length: ".$data['size']);

   header("Content-type: ".$data['type']);

   echo $data['program'];
}
else
{
   // bila tidak sama maka file tidak boleh didownload
   echo "<h1>Anda tidak berhak mengakses file</h1>";
}
?>
