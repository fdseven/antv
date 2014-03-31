<?php
// menjalankan session
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

mysql_connect("localhost", "tryme", "hacked");
mysql_select_db("antv2");

// mencari password terenkripsi berdasarkan username
$query = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysql_query($query) or die("Error");
$data  = mysql_fetch_array($hasil);

$pengacak  = "NDJS3289JSKS190JISJI";

// cek kesesuaian password terenkripsi dari form login
// dengan password terenkripsi dari database
if (md5($pengacak.md5($password).$pengacak) == $data['password'])
{
    // jika sesuai, maka buat session untuk username
    $_SESSION['username'] = $username;
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
            <td height="200" valign="middle"><div align="center">
            <?php
	echo "<h1>Login Sukses</h1>";
    echo "<h2>Anda login sebagai : ".$username."</h2>";

	// tampilkan menu user
   echo "<p>[ <a href='lesson3.php'>schedule</a> ] [ <a href='list.php'>Daftar File</a> ] [ <a href='logout.php'>Logout</a> ]</p>";
}
else
{
   // jika kedua password tidak cocok, maka login gagal
   echo "<h1>Maaf login gagal</h1>";
}

?>
</div></td>
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