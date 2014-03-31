<?php

include "cek.php";

// koneksi ke mysql
mysql_connect("localhost", "tryme", "hacked");
mysql_select_db("antv2");

// membaca id file yang akan dihapus
$id = $_GET['id'];

// membaca username yang sedang login
$username = $_SESSION['username'];

// mencari username pemilik file yang akan dihapus
$query = "SELECT username FROM schedule WHERE id = $id";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);

// mencocokkan username pemilik file dengan username yang sedang login
if ($username == $data['username'])
{
   // jika cocok maka hapus file
   $query = "DELETE FROM schedule WHERE id = $id";
   mysql_query($query);

   echo "<h1>Anda login sebagai : ".$username."</h1>";
   echo "<p>[ <a href='lesson3.php'>schedule</a> ] [ <a href='list.php'>Daftar File</a> ] [ <a href='logout.php'>Logout</a> ]</p>";

   echo "<p>File telah dihapus</p>";
}
else
{
   // jika tidak cocok maka tolak
   echo "<h1>Maaf Anda tidak berhak menghapus file ini</h1>";
}

?>