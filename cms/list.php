<?php
include "cek.php";

// koneksi ke mysql
mysql_connect("localhost", "tryme", "hacked");
mysql_select_db("antv2");

// membaca username yang disimpan dalam session
$username = $_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS index</title>

<link href="antv.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col"><table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><img src="img/header.jpg" width="400" height="111" /></th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <td><table width="400" border="0" cellpadding="0" cellspacing="0" background="img/cms_bg.jpg">
      <tr>
        <th height="400" valign="top" scope="col"><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th height="51" valign="middle" scope="col"><h1 class="style3">&nbsp;</h1></th>
          </tr>
          <tr>
            <td height="200" valign="middle"><div align="center"><?php

echo "<h1>Anda login sebagai : ".$username."</h1>";
echo "<p>[ <a href='lesson3.php'>schedule</a> ] [ <a href='list.php'>Daftar File</a> ] [ <a href='logout.php'>Logout</a> ]</p>";

echo "<h2>Daftar File Anda</h2>"; 

// query untuk mencari file yang telah diupload milik si user yang sedang login
$query = "SELECT * FROM schedule WHERE username = '$username'";

$hasil = mysql_query($query);

// menampilkan nama-nama file yang telah diupload si user yang sedang login
echo "<ul>";
while ($data = mysql_fetch_array($hasil))
{
    echo "<li><a href='download.php?id=".$data['id']."'>".$data['date']."</a> (<a href='delete.php?id=".$data['id']."'>x</a>)</li>";
}
echo "</ul>";

?></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="400" border="0" cellpadding="0" cellspacing="0" background="img/footer.jpg">
      <tr>
        <th height="54" valign="middle" class="footer" scope="col">Copyright © 2012 PT. Cakrawala Andalas Televisi</th>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>