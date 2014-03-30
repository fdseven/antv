<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn_HRD = "localhost";
$database_conn_HRD = "reqruitment";
$username_conn_HRD = "tryme";
$password_conn_HRD = "hacked";
$conn_HRD = mysql_pconnect($hostname_conn_HRD, $username_conn_HRD, $password_conn_HRD) or trigger_error(mysql_error(),E_USER_ERROR); 
?>