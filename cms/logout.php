<?php

session_start();

// menghapus session username
unset($_SESSION['username']);
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
            <th height="51" valign="middle" scope="col"><h1 class="style3"><?php

echo "<h1>Anda sudah logout</h1>";

?></h1></th>
          </tr>
          <tr>
            <td height="200" valign="middle"><div align="center"><h1 class="style3">Login User</h1>
                   <form method="post" action="loginsubmit.php">
  <table border="0">
    <tr>
      <td>Masukkan Username </td>
      <td><input name="username" type="text"></td>
    </tr>
    <tr>
      <td>Masukkan Password </td>
      <td><input name="password" type="password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form></div></td>
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