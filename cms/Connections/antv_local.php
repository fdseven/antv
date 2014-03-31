<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_antv = "localhost";
$database_antv = "antv2";
$username_antv = "root";
$password_antv = "admin";
$antv = mysql_pconnect($hostname_antv, $username_antv, $password_antv) or trigger_error(mysql_error(),E_USER_ERROR); 
?>