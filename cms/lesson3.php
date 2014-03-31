<?php

include "cek.php";

// membaca nama user yang tersimpan dalam session
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
    <th scope="col"><table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <th scope="col"><br /></th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <td><table width="400" border="0" align="left" cellpadding="0" cellspacing="0" background="img/cms_bg.jpg">
      
<tr>
  <th height="51" valign="middle" scope="col"><img src="img/header.jpg" width="400" height="111" /></th>
</tr>
<tr>
            <th height="51" valign="middle" scope="col"><h1 class="style3"><?php
echo "<h1>Anda login sebagai : ".$username."</h1>";
echo "<p>[ <a href='lesson3.php'>schedule</a> ] [ <a href='list.php'>Daftar File</a> ] [ <a href='logout.php'>Logout</a> ]</p>";
echo "<p>Silakan upload file</p>";
?></h1></th>
          </tr>
          <tr>
            <td height="200" ><div align="center">Schedule Program Hari Ini
<form method="post" action="lesson_submit3.php">
<table width="300" align="center" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td>Schedule</td><td>:</td><td><textarea
name="program" cols="30" rows="10" ></textarea></td></tr>

<tr><td>Tanggal</td><td>:</td>
<td>
<select name="tgl">
<?php
for($i=1; $i<=31; $i++)
{

echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
<select name="bln">
<?php
for($i=1; $i<=12; $i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
<select name="thn">
<?php
for($i=2013; $i<=2050; $i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select></td>
</tr>

<tr><td></td><td></td><td><input type="submit" name="submit"
value="Submit" /></td></tr>
</table>
</form></div></td>
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