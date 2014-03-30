<?php 
ob_start();
require_once('../Connections/conn_HRD.php'); 
include('functions.php');

?>
<?php

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_ID = "select * from application order by app_id asc";
$RS_ID = mysql_query($query_RS_ID, $conn_HRD) or die(mysql_error());
$row_RS_ID = mysql_fetch_assoc($RS_ID);
$totalRows_RS_ID = mysql_num_rows($RS_ID);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_Sex = "SELECT sex_type FROM sex ORDER BY sex_id ASC";
$RS_Sex = mysql_query($query_RS_Sex, $conn_HRD) or die(mysql_error());
$row_RS_Sex = mysql_fetch_assoc($RS_Sex);
$totalRows_RS_Sex = mysql_num_rows($RS_Sex);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_Married = "SELECT married_type FROM married ORDER BY married_id ASC";
$RS_Married = mysql_query($query_RS_Married, $conn_HRD) or die(mysql_error());
$row_RS_Married = mysql_fetch_assoc($RS_Married);
$totalRows_RS_Married = mysql_num_rows($RS_Married);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_Location = "SELECT loc_area FROM location ORDER BY loc_id ASC";
$RS_Location = mysql_query($query_RS_Location, $conn_HRD) or die(mysql_error());
$row_RS_Location = mysql_fetch_assoc($RS_Location);
$totalRows_RS_Location = mysql_num_rows($RS_Location);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_Province = "SELECT prov_area FROM province ORDER BY prov_id ASC";
$RS_Province = mysql_query($query_RS_Province, $conn_HRD) or die(mysql_error());
$row_RS_Province = mysql_fetch_assoc($RS_Province);
$totalRows_RS_Province = mysql_num_rows($RS_Province);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_Division = "SELECT div_name FROM division ORDER BY div_id ASC";
$RS_Division = mysql_query($query_RS_Division, $conn_HRD) or die(mysql_error());
$row_RS_Division = mysql_fetch_assoc($RS_Division);
$totalRows_RS_Division = mysql_num_rows($RS_Division);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_EduType = "SELECT edu_desc FROM edu_type ORDER BY edu_id ASC";
$RS_EduType = mysql_query($query_RS_EduType, $conn_HRD) or die(mysql_error());
$row_RS_EduType = mysql_fetch_assoc($RS_EduType);
$totalRows_RS_EduType = mysql_num_rows($RS_EduType);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_YearStudy = "SELECT y1_desc FROM year_study ORDER BY y1_id ASC";
$RS_YearStudy = mysql_query($query_RS_YearStudy, $conn_HRD) or die(mysql_error());
$row_RS_YearStudy = mysql_fetch_assoc($RS_YearStudy);
$totalRows_RS_YearStudy = mysql_num_rows($RS_YearStudy);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_YearWork = "SELECT y2_desc FROM year_work ORDER BY y2_id ASC";
$RS_YearWork = mysql_query($query_RS_YearWork, $conn_HRD) or die(mysql_error());
$row_RS_YearWork = mysql_fetch_assoc($RS_YearWork);
$totalRows_RS_YearWork = mysql_num_rows($RS_YearWork);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_dd = "SELECT dd_desc FROM dd ORDER BY dd_id ASC";
$RS_dd = mysql_query($query_RS_dd, $conn_HRD) or die(mysql_error());
$row_RS_dd = mysql_fetch_assoc($RS_dd);
$totalRows_RS_dd = mysql_num_rows($RS_dd);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_mm = "SELECT mm_desc FROM mm ORDER BY mm_id ASC";
$RS_mm = mysql_query($query_RS_mm, $conn_HRD) or die(mysql_error());
$row_RS_mm = mysql_fetch_assoc($RS_mm);
$totalRows_RS_mm = mysql_num_rows($RS_mm);

mysql_select_db($database_conn_HRD, $conn_HRD);
$query_RS_yyyy = "SELECT yy_desc FROM yyyy ORDER BY yy_id ASC";
$RS_yyyy = mysql_query($query_RS_yyyy, $conn_HRD) or die(mysql_error());
$row_RS_yyyy = mysql_fetch_assoc($RS_yyyy);
$totalRows_RS_yyyy = mysql_num_rows($RS_yyyy);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>antv - Form Aplikasi</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
}
.FontPersembahan {
	font-size: 10px;
	font-weight: bold;
	color: #FFFFFF;
	font-family: Verdana;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<link href="css/antvsports_CSS.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.FontItem_Normal {
	font-family: Verdana;
	font-size: 12px;
	color: #000000;
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
</head>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td width="9%" align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td width="1%" align="center"></td>
    <td width="80%" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">


  
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p></p>
      <p align="center" class="style1">Form Aplikasi</p></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
</table>
<?php
  	   if(isset($_POST['register']))
	   {
	      if(
		  $_POST['division']!='' && 
		  $_POST['division']!='-----' &&
		  $_POST['username']!='' && 
		  $_POST['sex']!='' && 
		  $_POST['married']!='' && 
		  $_POST['pob']!='' && 
		  $_POST['dob_dd']!='' && 
		  $_POST['dob_dd']!='--' && 
		  $_POST['dob_mm']!='' && 
		  $_POST['dob_mm']!='--' && 
		  $_POST['dob_yyyy']!='' && 
		  $_POST['dob_yyyy']!='----' && 
		  $_POST['address']!='' && 
		  $_POST['phone']!='' && 

		  $_POST['s1_edutype']!='' &&
		  $_POST['s1_edutype']!='-----' &&
		  $_POST['s1_name']!='' && 
		  $_POST['s1_city']!='' && 
		  $_POST['s1_year']!='' && 
		  $_POST['s1_year']!='-----' && 
		  $_POST['s1_gpa']!='' && 

		  $_POST['s2_edutype']!='' &&
		  $_POST['s2_edutype']!='-----' &&
		  $_POST['s2_name']!='' && 
		  $_POST['s2_city']!='' && 
		  $_POST['s2_year']!='' && 
		  $_POST['s2_year']!='-----' && 
		  $_POST['s2_gpa']!=''  
		  
		  
		  


		  ) 
		  {
 				      $query = mysql_query("INSERT INTO application (
					  `app_position`, 
					  `app_name`, 
					  `app_sex` , 
					  `app_marital`, 
					  `app_pob`, 
					  `app_dd`, 
					  `app_mm`, 
					  `app_yyyy`, 
					  `app_address`, 
					  `app_city`, 
					  `app_zip`, 
					  `app_province`, 
					  `app_phone`, 
					  `app_mobile`, 
					  `app_email`, 

					  `app_s1_type`,	
					  `app_s1_name`, 
					  `app_s1_city`, 
					  `app_s1_year`, 
					  `app_s1_gpa` ,

					  `app_s2_type`,
					  `app_s2_name`, 
					  `app_s2_city`, 
					  `app_s2_year`, 
					  `app_s2_gpa` ,
					  
					  `app_working1_name`, 
					  `app_working1_city`, 
					  `app_working1_pos`, 
					  `app_working1_dept` ,
					  `app_working1_bustype`, 
					  `app_working1_fryear`, 
					  `app_working1_toyear`, 
					  `app_working1_brief` ,

					  `app_working2_name`, 
					  `app_working2_city`, 
					  `app_working2_pos`, 
					  `app_working2_dept` ,
					  `app_working2_bustype`, 
					  `app_working2_fryear`, 
					  `app_working2_toyear`, 
					  `app_working2_brief` ,

					  `app_working3_name`, 
					  `app_working3_city`, 
					  `app_working3_pos`, 
					  `app_working3_dept` ,
					  `app_working3_bustype`, 
					  `app_working3_fryear`, 
					  `app_working3_toyear`, 
					  `app_working3_brief` ,
					  
					  `app_skill_training1`,
					  `app_skill_training2`,
					  `app_skill_training3`,
					  `app_hobby`
					  
					  
					  ) 
					  VALUES (
					  '".mysql_real_escape_string($_POST['division'])."', 
					  '".mysql_real_escape_string($_POST['username'])."', 
					  '".mysql_real_escape_string($_POST['sex'])."', 
					  '".mysql_real_escape_string($_POST['married'])."', 
					  '".mysql_real_escape_string($_POST['pob'])."', 
					  '".mysql_real_escape_string($_POST['dob_dd'])."', 
					  '".mysql_real_escape_string($_POST['dob_mm'])."', 
					  '".mysql_real_escape_string($_POST['dob_yyyy'])."', 
					  '".mysql_real_escape_string($_POST['address'])."', 
					  '".mysql_real_escape_string($_POST['location'])."', 
					  '".mysql_real_escape_string($_POST['zip'])."', 
					  '".mysql_real_escape_string($_POST['province'])."', 
					  '".mysql_real_escape_string($_POST['phone'])."', 
					  '".mysql_real_escape_string($_POST['mobile'])."', 
					  '".mysql_real_escape_string($_POST['email_addr'])."',  
					  '".mysql_real_escape_string($_POST['s1_edutype'])."', 
					  '".mysql_real_escape_string($_POST['s1_name'])."', 
					  '".mysql_real_escape_string($_POST['s1_city'])."', 
					  '".mysql_real_escape_string($_POST['s1_year'])."', 
					  '".mysql_real_escape_string($_POST['s1_gpa'])."', 
					  
					  '".mysql_real_escape_string($_POST['s2_edutype'])."', 
					  '".mysql_real_escape_string($_POST['s2_name'])."', 
					  '".mysql_real_escape_string($_POST['s2_city'])."', 
					  '".mysql_real_escape_string($_POST['s2_year'])."', 
					  '".mysql_real_escape_string($_POST['s2_gpa'])."', 


					  '".mysql_real_escape_string($_POST['work1_name'])."', 
					  '".mysql_real_escape_string($_POST['work1_city'])."', 
					  '".mysql_real_escape_string($_POST['work1_pos'])."', 
					  '".mysql_real_escape_string($_POST['work1_div'])."', 
					  '".mysql_real_escape_string($_POST['work1_bustype'])."', 
					  '".mysql_real_escape_string($_POST['work1_fryear'])."', 
					  '".mysql_real_escape_string($_POST['work1_toyear'])."', 
					  '".mysql_real_escape_string($_POST['work1_brief'])."', 
					  
					  '".mysql_real_escape_string($_POST['work2_name'])."', 
					  '".mysql_real_escape_string($_POST['work2_city'])."', 
					  '".mysql_real_escape_string($_POST['work2_pos'])."', 
					  '".mysql_real_escape_string($_POST['work2_div'])."', 
					  '".mysql_real_escape_string($_POST['work2_bustype'])."', 
					  '".mysql_real_escape_string($_POST['work2_fryear'])."', 
					  '".mysql_real_escape_string($_POST['work2_toyear'])."', 
					  '".mysql_real_escape_string($_POST['work2_brief'])."', 
					  
					  '".mysql_real_escape_string($_POST['work3_name'])."', 
					  '".mysql_real_escape_string($_POST['work3_city'])."', 
					  '".mysql_real_escape_string($_POST['work3_pos'])."', 
					  '".mysql_real_escape_string($_POST['work3_div'])."', 
					  '".mysql_real_escape_string($_POST['work3_bustype'])."', 
					  '".mysql_real_escape_string($_POST['work3_fryear'])."', 
					  '".mysql_real_escape_string($_POST['work3_toyear'])."', 
					  '".mysql_real_escape_string($_POST['work3_brief'])."', 

					  
					  
					  
					  '".mysql_real_escape_string($_POST['skill1'])."', 
					  '".mysql_real_escape_string($_POST['skill2'])."', 
					  '".mysql_real_escape_string($_POST['skill3'])."', 
					  '".mysql_real_escape_string($_POST['skill4'])."')") 
					  or die(mysql_error());
			



					  $_POST['division'] = '-----'; 
					  $_POST['username'] = ''; 
					  $_POST['sex'] = '-----'; 
					  $_POST['married'] = '-----'; 
					  $_POST['pob'] = ''; 
					  $_POST['dob_dd'] = '--'; 
					  $_POST['dob_mm'] = '--'; 
					  $_POST['dob_yyyy'] = '----'; 
					  $_POST['address'] = ''; 
					  $_POST['location'] = '-----'; 
					  $_POST['zip'] = ''; 
					  $_POST['province'] = '-----'; 
					  $_POST['phone'] = ''; 
					  $_POST['mobile'] = ''; 
					  $_POST['email_addr'] = ''; 
					  
					  $_POST['s1_edutype'] = '-----'; 
					  $_POST['s1_name'] = ''; 
					  $_POST['s1_city'] = ''; 
					  $_POST['s1_year'] = '-----'; 
					  $_POST['s1_gpa'] = ''; 
					  
					  $_POST['s2_edutype'] = '-----'; 
					  $_POST['s2_name'] = ''; 
					  $_POST['s2_city'] = ''; 
					  $_POST['s2_year'] = '-----'; 
					  $_POST['s2_gpa'] = ''; 


					  $_POST['work1_name'] = ''; 
					  $_POST['work1_city'] = ''; 
					  $_POST['work1_pos'] = ''; 
					  $_POST['work1_div'] = ''; 
					  $_POST['work1_bustype'] = ''; 
					  $_POST['work1_fryear'] = ''; 
					  $_POST['work1_toyear'] = ''; 
					  $_POST['work1_brief'] = ''; 
					  
					  $_POST['work2_name'] = ''; 
					  $_POST['work2_city'] = ''; 
					  $_POST['work2_pos'] = ''; 
					  $_POST['work2_div'] = ''; 
					  $_POST['work2_bustype'] = ''; 
					  $_POST['work2_fryear'] = ''; 
					  $_POST['work2_toyear'] = ''; 
					  $_POST['work2_brief'] = ''; 
					  
					  $_POST['work3_name'] = ''; 
					  $_POST['work3_city'] = ''; 
					  $_POST['work3_pos'] = ''; 
					  $_POST['work3_div'] = ''; 
					  $_POST['work3_bustype'] = ''; 
					  $_POST['work3_fryear'] = ''; 
					  $_POST['work3_toyear'] = ''; 
					  $_POST['work3_brief'] = ''; 

					  $_POST['skill1'] = ''; 
					  $_POST['skill2'] = ''; 
					  $_POST['skill3'] = ''; 
					  $_POST['skill4'] = ''; 





							
			       }
			       else
		  {
		     $error = 'ERROR: Anda harus mengisi semua kolom yang disediakan.';
		  }  
       }  //end if all checks
		
	?>
	<?php if(isset($error))
	  { 
	     ?>
	<span class="NormalText_Bold">
	<center><?php echo $error; ?></center>
	</span>
	<div align="center">
  <?php

	  }
	?>  
  <?php if(isset($msg))
	{ 
	  //echo $msg;
	  header("Location: email_aktivasi.php");
	  
	} 
	 else { ?> <p align="center">
  <span class="FontKecil_Bold">Field dengan tanda (*) wajib diisi
  </span></p>
    </div>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">




<table width="560" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr class="FontItem_Normal">
    <td valign="top" class="Judul"><p>INFORMASI PRIBADI</p>
      <p>&nbsp;</p></td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Posisi Yang Dilamar <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="division" id="division" size="1" class="ip1">
        <option value="''">-----</option>
        <?php 
do {  
?>
        <option value="<?php echo $row_RS_Division['div_name']?>" 
		  <?php if($_POST['division'] == $row_RS_Division['div_name']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_Division['div_name']?></option>
        <?php
} while ($row_RS_Division = mysql_fetch_assoc($RS_Division));
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td width="250" valign="top" class="FontItem_Normal">Nama Lengkap<em></em> <span class="FontKecil_Bold">(*)</span></td>
    <td width="10" align="center" valign="top" class="FontItem_Normal">:</td>
    <td width="300" valign="top" class="FontItem_Normal"><input name="username" id="username" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Jenis Kelamin <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="sex" id="sex" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_Sex['sex_type']?>" 
		  <?php if($_POST['sex'] == $row_RS_Sex['sex_type']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_Sex['sex_type']?></option>
      <?php
} while ($row_RS_Sex = mysql_fetch_assoc($RS_Sex));
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Status Nikah <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="married" id="married" size="1" class="ip1">
        <option value="''">-----</option>
        <?php 
do {  
?>
        <option value="<?php echo $row_RS_Married['married_type']?>" 
		  <?php if($_POST['married'] == $row_RS_Married['married_type']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_Married['married_type']?></option>
        <?php
} while ($row_RS_Married = mysql_fetch_assoc($RS_Married));
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Tempat Lahir<em></em> <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="pob" id="pob" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['pob'])){echo $_POST['pob'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Tanggal Lahir<em></em> <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="dob_dd" id="dob_dd" size="1" class="ip1">
      <option value="''">--</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_dd['dd_desc']?>" 
		  <?php if($_POST['dob_dd'] == $row_RS_dd['dd_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_dd['dd_desc']?></option>
      <?php
} while ($row_RS_dd = mysql_fetch_assoc($RS_dd));
  $rows = mysql_num_rows($RS_dd); 
  if($rows > 0) {
      mysql_data_seek($RS_dd, 0);
	  $row_RS_dd = mysql_fetch_assoc($RS_dd);
  }
?>
    </select>
     - <select name="dob_mm" id="dob_mm" size="1" class="ip1">
      <option value="''">--</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_mm['mm_desc']?>" 
		  <?php if($_POST['dob_mm'] == $row_RS_mm['mm_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_mm['mm_desc']?></option>
      <?php
} while ($row_RS_mm = mysql_fetch_assoc($RS_mm));
  $rows = mysql_num_rows($RS_mm); 
  if($rows > 0) {
      mysql_data_seek($RS_mm, 0);
	  $row_RS_mm = mysql_fetch_assoc($RS_mm);
  }
?>
    </select>
     - <select name="dob_yyyy" id="dob_yyyy" size="1" class="ip1">
      <option value="''">----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_yyyy['yy_desc']?>" 
		  <?php if($_POST['dob_yyyy'] == $row_RS_yyyy['yy_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_yyyy['yy_desc']?></option>
      <?php
} while ($row_RS_yyyy = mysql_fetch_assoc($RS_yyyy));
  $rows = mysql_num_rows($RS_yyyy); 
  if($rows > 0) {
      mysql_data_seek($RS_yyyy, 0);
	  $row_RS_yyyy = mysql_fetch_assoc($RS_yyyy);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Alamat <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="address" id="address" cols="39" rows="3" class="ip1" ><?php if(isset($_POST['address'])){echo $_POST['address'];}?></textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="style12">Kota</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="location" id="location" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_Location['loc_area']?>" 
		  <?php if($_POST['location'] == $row_RS_Location['loc_area']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_Location['loc_area']?></option>
      <?php
} while ($row_RS_Location = mysql_fetch_assoc($RS_Location));
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="style12">Kode Pos</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="zip" id="zip" class="ip1" size="8" maxlength="5" value="<?php if(isset($_POST['zip'])){echo $_POST['zip'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Propinsi</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="province" id="province" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_Province['prov_area']?>" 
		  <?php if($_POST['province'] == $row_RS_Province['prov_area']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_Province['prov_area']?></option>
      <?php
} while ($row_RS_Province = mysql_fetch_assoc($RS_Province));
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Telepon<em></em> <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="phone" id="phone" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Handphone<em></em> </td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="mobile" id="mobile" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Email<em></em> </td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="email_addr" id="email_addr" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['email_addr'])){echo $_POST['email_addr'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="Judul"><p>RIWAYAT PENDIDIKAN <br />
      (urutkan mulai pendidikan terakhir)</p>
        <p>&nbsp;</p></td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="NormalText_Bold">Pendidikan 1</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Jenjang Pendidikan <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="s1_edutype" id="s1_edutype" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_EduType['edu_desc']?>" 
		  <?php if($_POST['s1_edutype'] == $row_RS_EduType['edu_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_EduType['edu_desc']?></option>
      <?php
} while ($row_RS_EduType = mysql_fetch_assoc($RS_EduType));
  $rows = mysql_num_rows($RS_EduType);
  if($rows > 0) {
      mysql_data_seek($RS_EduType, 0);
	  $row_RS_EduType = mysql_fetch_assoc($RS_EduType);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Nama<em></em> Institusi <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="s1_name" id="s1_name" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['s1_name'])){echo $_POST['s1_name'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Kota <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="s1_city" id="s1_city" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['s1_city'])){echo $_POST['s1_city'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Lulus Tahun <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="s1_year" id="s1_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearStudy['y1_desc']?>" 
		  <?php if($_POST['s1_year'] == $row_RS_YearStudy['y1_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearStudy['y1_desc']?></option>
      <?php
} while ($row_RS_YearStudy = mysql_fetch_assoc($RS_YearStudy));
  $rows = mysql_num_rows($RS_YearStudy); 
  if($rows > 0) {
      mysql_data_seek($RS_YearStudy, 0);
	  $row_RS_YearStudy = mysql_fetch_assoc($RS_YearStudy);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Nilai Rata-Rata Kelulusan / IPK <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="s1_gpa" id="s1_gpa" class="ip1" size="8" maxlength="10" value="<?php if(isset($_POST['s1_gpa'])){echo $_POST['s1_gpa'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="NormalText_Bold">Pendidikan 2</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Jenjang Pendidikan <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="s2_edutype" id="s2_edutype" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_EduType['edu_desc']?>" 
		  <?php if($_POST['s2_edutype'] == $row_RS_EduType['edu_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_EduType['edu_desc']?></option>
      <?php
} while ($row_RS_EduType = mysql_fetch_assoc($RS_EduType));
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Nama<em></em> Institusi <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="s2_name" id="s2_name" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['s2_name'])){echo $_POST['s2_name'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Kota <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="s2_city" id="s2_city" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['s2_city'])){echo $_POST['s2_city'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Lulus Tahun <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="s2_year" id="s2_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearStudy['y1_desc']?>" 
		  <?php if($_POST['s2_year'] == $row_RS_YearStudy['y1_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearStudy['y1_desc']?></option>
      <?php
} while ($row_RS_YearStudy = mysql_fetch_assoc($RS_YearStudy));
  $rows = mysql_num_rows($RS_YearStudy); 
  if($rows > 0) {
      mysql_data_seek($RS_YearStudy, 0);
	  $row_RS_YearStudy = mysql_fetch_assoc($RS_YearStudy);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Nilai Rata-Rata Kelulusan / IPK <span class="FontKecil_Bold">(*)</span></td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="s2_gpa" id="s2_gpa" class="ip1" size="8" maxlength="10" value="<?php if(isset($_POST['s2_gpa'])){echo $_POST['s2_gpa'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="Judul"><p>PENGALAMAN KERJA<br />
      (urutkan mulai pekerjaan terakhir)</p>
        <p>&nbsp;</p></td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="NormalText_Bold">Perusahaan 1</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Nama<em></em> Perusahaan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work1_name" id="work1_name" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work1_name'])){echo $_POST['work1_name'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Kota</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work1_city" id="work1_city" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work1_city'])){echo $_POST['work1_city'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Posisi / Jabatan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work1_pos" id="work1_pos" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work1_pos'])){echo $_POST['work1_pos'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Divisi / Departemen</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work1_div" id="work1_div" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work1_div'])){echo $_POST['work1_div'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Jenis Usaha</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work1_bustype" id="work1_bustype" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work1_bustype'])){echo $_POST['work1_bustype'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Mulai Tahun</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="w1_year" id="w1_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearWork['y2_desc']?>" 
		  <?php if($_POST['w1_year'] == $row_RS_YearWork['y2_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearWork['y2_desc']?></option>
      <?php
} while ($row_RS_YearWork = mysql_fetch_assoc($RS_YearWork));
  $rows = mysql_num_rows($RS_YearWork); 
  if($rows > 0) {
      mysql_data_seek($RS_YearWork, 0);
	  $row_RS_YearWork = mysql_fetch_assoc($RS_YearWork);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Selesai Tahun</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="w2_year" id="w2_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearWork['y2_desc']?>" 
		  <?php if($_POST['w2_year'] == $row_RS_YearWork['y2_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearWork['y2_desc']?></option>
      <?php
} while ($row_RS_YearWork = mysql_fetch_assoc($RS_YearWork));
  $rows = mysql_num_rows($RS_YearWork); 
  if($rows > 0) {
      mysql_data_seek($RS_YearWork, 0);
	  $row_RS_YearWork = mysql_fetch_assoc($RS_YearWork);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Deskripsi Pekerjaan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="work1_brief" id="work1_brief" cols="39" rows="3" class="ip1" ><?php if(isset($_POST['work1_brief'])){echo $_POST['work1_brief'];}?>
    </textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="NormalText_Bold">Perusahaan 2</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Nama<em></em> Perusahaan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work2_name" id="work2_name" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work2_name'])){echo $_POST['work2_name'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Kota</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work2_city" id="work2_city" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work2_city'])){echo $_POST['work2_city'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Posisi / Jabatan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work2_pos" id="work2_pos" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work2_pos'])){echo $_POST['work2_pos'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Divisi / Departemen</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work2_div" id="work2_div" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work2_div'])){echo $_POST['work2_div'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Jenis Usaha</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work2_bustype" id="work2_bustype" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work2_bustype'])){echo $_POST['work2_bustype'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Mulai Tahun</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="w3_year" id="w3_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearWork['y2_desc']?>" 
		  <?php if($_POST['w3_year'] == $row_RS_YearWork['y2_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearWork['y2_desc']?></option>
      <?php
} while ($row_RS_YearWork = mysql_fetch_assoc($RS_YearWork));
  $rows = mysql_num_rows($RS_YearWork); 
  if($rows > 0) {
      mysql_data_seek($RS_YearWork, 0);
	  $row_RS_YearWork = mysql_fetch_assoc($RS_YearWork);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Selesai Tahun</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="w4_year" id="w4_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearWork['y2_desc']?>" 
		  <?php if($_POST['w4_year'] == $row_RS_YearWork['y2_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearWork['y2_desc']?></option>
      <?php
} while ($row_RS_YearWork = mysql_fetch_assoc($RS_YearWork));
  $rows = mysql_num_rows($RS_YearWork); 
  if($rows > 0) {
      mysql_data_seek($RS_YearWork, 0);
	  $row_RS_YearWork = mysql_fetch_assoc($RS_YearWork);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Deskripsi Pekerjaan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="work2_brief" id="work2_brief" cols="39" rows="3" class="ip1" ><?php if(isset($_POST['work2_brief'])){echo $_POST['work2_brief'];}?>
    </textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="NormalText_Bold">Perusahaan 3</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Nama<em></em> Perusahaan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work3_name" id="work3_name" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work3_name'])){echo $_POST['work3_name'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Kota</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work3_city" id="work3_city" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work3_city'])){echo $_POST['work3_city'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Posisi / Jabatan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work3_pos" id="work3_pos" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work3_pos'])){echo $_POST['work3_pos'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Divisi / Departemen</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work3_div" id="work3_div" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work3_div'])){echo $_POST['work3_div'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Jenis Usaha</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="work3_bustype" id="work3_bustype" class="ip1" size="50" maxlength="100" value="<?php if(isset($_POST['work3_bustype'])){echo $_POST['work3_bustype'];}?>" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Mulai Tahun</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="w5_year" id="w5_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearWork['y2_desc']?>" 
		  <?php if($_POST['w5_year'] == $row_RS_YearWork['y2_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearWork['y2_desc']?></option>
      <?php
} while ($row_RS_YearWork = mysql_fetch_assoc($RS_YearWork));
  $rows = mysql_num_rows($RS_YearWork); 
  if($rows > 0) {
      mysql_data_seek($RS_YearWork, 0);
	  $row_RS_YearWork = mysql_fetch_assoc($RS_YearWork);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Selesai Tahun</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><select name="w6_year" id="w6_year" size="1" class="ip1">
      <option value="''">-----</option>
      <?php 
do {  
?>
      <option value="<?php echo $row_RS_YearWork['y2_desc']?>" 
		  <?php if($_POST['w6_year'] == $row_RS_YearWork['y2_desc']) {echo 'selected="selected"';}?>
		  ><?php echo $row_RS_YearWork['y2_desc']?></option>
      <?php
} while ($row_RS_YearWork = mysql_fetch_assoc($RS_YearWork));
  $rows = mysql_num_rows($RS_YearWork); 
  if($rows > 0) {
      mysql_data_seek($RS_YearWork, 0);
	  $row_RS_YearWork = mysql_fetch_assoc($RS_YearWork);
  }
?>
    </select></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Deskripsi Pekerjaan</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="work3_brief" id="work3_brief" cols="39" rows="3" class="ip1" ><?php if(isset($_POST['work3_brief'])){echo $_POST['work3_brief'];}?>
    </textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="Judul"><p>TRAINING / PELATIHAN</p>
      <p>&nbsp;</p></td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal"><p>Tuliskan training / pelatihan yang pernah Anda ikuti</p>
      <p><br />
      </p></td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Komputer</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="skill1" id="skill1" cols="39" rows="10" class="ip1" ><?php if(isset($_POST['skill1'])){echo $_POST['skill1'];}?>
    </textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Bahasa Asing</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="skill2" id="skill2" cols="39" rows="10" class="ip1" ><?php if(isset($_POST['skill2'])){echo $_POST['skill2'];}?>
    </textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Lainnya (drama, editing, tari, modeling, dll)</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="skill3" id="skill3" cols="39" rows="10" class="ip1" ><?php if(isset($_POST['skill3'])){echo $_POST['skill3'];}?>
    </textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">Hobi</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><textarea name="skill4" id="skill4" cols="39" rows="10" class="ip1" ><?php if(isset($_POST['skill4'])){echo $_POST['skill4'];}?>
    </textarea></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">File Foto</td>
    <td align="center" valign="top" class="FontItem_Normal">:</td>
    <td valign="top" class="FontItem_Normal"><input name="app_foto" type="file" id="app_foto" size="30" />
	
	<?php
$namafolder="app_foto/"; //tempat menyimpan file
if (!empty($_FILES["username"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['username']['type'];
	$app_foto=$_POST['app_foto'];
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['username']['name']);		
		if (move_uploaded_file($_FILES['username']['tmp_name'], $gambar)) {
			$sql="insert into tb_gambar(app_foto,username) values ('$app_foto','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "Gambar berhasil dikirim ".$gambar;
			echo "<p>Judul Gambar : $app_foto</p>";		   
			echo "<p><img src=\"$gambar\" width=\"200\"/></p>";		   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}
?>&nbsp;</td>
  </tr>
  <tr class="FontItem_Normal">
    <td align="right" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal"><input type="submit" name="register" value="Masukkan Data" /></td>
  </tr>
  <tr class="FontItem_Normal">
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
    <td align="center" valign="top" class="FontItem_Normal">&nbsp;</td>
    <td valign="top" class="FontItem_Normal">&nbsp;</td>
  </tr>
</table>
  </form>
  <? } ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
</table></td>
    <td width="1%" align="center"><img src="images_fix/spacer_5X5.gif" width="5" height="5" /></td>
    <td width="9%" align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>


</body>
</html>
