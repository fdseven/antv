<?
mysql_connect("localhost","tryme","hacked");
mysql_select_db("reqruitment");

// Get data records from table.
$result=mysql_query("select * from application where app_downloaded = 0 group by app_name order by app_id asc");

// Functions for export to excel.
function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}
function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}
function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}
function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");;
header("Content-Disposition: attachment;filename=antv-applist.xls ");
header("Content-Transfer-Encoding: binary ");

xlsBOF();

/*
Make a top line on your excel sheet at line 1 (starting at 0).
The first number is the row number and the second number is the column, both are start at '0'
*/

xlsWriteLabel(0,1,"LIST OF APPLICATIONS");

// Make column labels. (at line 3)
xlsWriteLabel(2, 0,"ID");
xlsWriteLabel(2, 1,"POSITION");
xlsWriteLabel(2, 2,"USERNAME");
xlsWriteLabel(2, 3,"SEX");
xlsWriteLabel(2, 4,"MARITAL");
xlsWriteLabel(2, 5,"POB");
xlsWriteLabel(2, 6,"DD");
xlsWriteLabel(2, 7,"MM");
xlsWriteLabel(2, 8,"YYYY");
xlsWriteLabel(2, 9,"ADDRESS");
xlsWriteLabel(2,10,"CITY");
xlsWriteLabel(2,11,"ZIP");
xlsWriteLabel(2,12,"PROV");
xlsWriteLabel(2,13,"PHONE");
xlsWriteLabel(2,14,"MOBILE");
xlsWriteLabel(2,15,"EMAIL");
xlsWriteLabel(2,16,"EDU1 TYPE");
xlsWriteLabel(2,17,"EDU1 MAJOR");
xlsWriteLabel(2,18,"EDU1 NAME");
xlsWriteLabel(2,19,"EDU1 CITY");
xlsWriteLabel(2,20,"EDU1 GRAD");
xlsWriteLabel(2,21,"EDU1 GPA");
xlsWriteLabel(2,22,"EDU2 TYPE");
xlsWriteLabel(2,23,"EDU2 MAJOR");
xlsWriteLabel(2,24,"EDU2 NAME");
xlsWriteLabel(2,25,"EDU2 CITY");
xlsWriteLabel(2,26,"EDU2 GRAD");
xlsWriteLabel(2,27,"EDU2 GPA");
xlsWriteLabel(2,28,"COMP1 NAME");
xlsWriteLabel(2,29,"COMP1 CITY");
xlsWriteLabel(2,30,"COMP1 POSITION");
xlsWriteLabel(2,31,"COMP1 DEPT");
xlsWriteLabel(2,32,"COMP1 BUS TYPE");
xlsWriteLabel(2,33,"START YEAR1");
xlsWriteLabel(2,34,"END YEAR1");
xlsWriteLabel(2,35,"COMP2 NAME");
xlsWriteLabel(2,36,"COMP2 CITY");
xlsWriteLabel(2,37,"COMP2 POSITION");
xlsWriteLabel(2,38,"COMP2 DEPT");
xlsWriteLabel(2,39,"COMP2 BUS TYPE");
xlsWriteLabel(2,40,"START YEAR2");
xlsWriteLabel(2,41,"END YEAR2");
xlsWriteLabel(2,42,"COMP3 NAME");
xlsWriteLabel(2,43,"COMP3 CITY");
xlsWriteLabel(2,44,"COMP3 POSITION");
xlsWriteLabel(2,45,"COMP3 DEPT");
xlsWriteLabel(2,46,"COMP3 BUS TYPE");
xlsWriteLabel(2,47,"START YEAR3");
xlsWriteLabel(2,48,"END YEAR3");
xlsWriteLabel(2,49,"COMPUTER");
xlsWriteLabel(2,50,"LANGUAGE");
xlsWriteLabel(2,51,"OTHERS");
xlsWriteLabel(2,52,"HOBBY");


$xlsRow = 4;

// Put data records from mysql by while loop.
while($row=mysql_fetch_array($result)){

xlsWriteNumber($xlsRow, 0,$row['app_id']);
xlsWriteLabel($xlsRow,  1,$row['app_position']);
xlsWriteLabel($xlsRow,  2,$row['app_name']);
xlsWriteLabel($xlsRow,  3,$row['app_sex']);
xlsWriteLabel($xlsRow,  4,$row['app_marital']);
xlsWriteLabel($xlsRow,  5,$row['app_pob']);
xlsWriteNumber($xlsRow, 6,$row['app_dd']);
xlsWriteNumber($xlsRow, 7,$row['app_mm']);
xlsWriteNumber($xlsRow, 8,$row['app_yyyy']);
xlsWriteLabel($xlsRow,  9,$row['app_address']);
xlsWriteLabel($xlsRow, 10,$row['app_city']);
xlsWriteLabel($xlsRow, 11,$row['app_zip']);
xlsWriteLabel($xlsRow, 12,$row['app_province']);
xlsWriteLabel($xlsRow, 13,$row['app_phone']);
xlsWriteLabel($xlsRow, 14,$row['app_mobile']);
xlsWriteLabel($xlsRow, 15,$row['app_email']);
xlsWriteLabel($xlsRow, 16,$row['app_S1_type']);
xlsWriteLabel($xlsRow, 17,$row['app_S1_major']);
xlsWriteLabel($xlsRow, 18,$row['app_S1_name']);
xlsWriteLabel($xlsRow, 19,$row['app_S1_city']);
xlsWriteLabel($xlsRow, 20,$row['app_S1_year']);
xlsWriteNumber($xlsRow,21,$row['app_S1_gpa']);
xlsWriteLabel($xlsRow, 22,$row['app_S2_type']);
xlsWriteLabel($xlsRow, 23,$row['app_S2_major']);
xlsWriteLabel($xlsRow, 24,$row['app_S2_name']);
xlsWriteLabel($xlsRow, 25,$row['app_S2_city']);
xlsWriteLabel($xlsRow, 26,$row['app_S2_year']);
xlsWriteNumber($xlsRow,27,$row['app_S2_gpa']);
xlsWriteLabel($xlsRow, 28,$row['app_working1_name']);
xlsWriteLabel($xlsRow, 29,$row['app_working1_city']);
xlsWriteLabel($xlsRow, 30,$row['app_working1_pos']);
xlsWriteLabel($xlsRow, 31,$row['app_working1_dept']);
xlsWriteLabel($xlsRow, 32,$row['app_working1_bustype']);
xlsWriteLabel($xlsRow, 33,$row['app_working1_fryear']);
xlsWriteLabel($xlsRow, 34,$row['app_working1_toyear']);
xlsWriteLabel($xlsRow, 35,$row['app_working2_name']);
xlsWriteLabel($xlsRow, 36,$row['app_working2_city']);
xlsWriteLabel($xlsRow, 37,$row['app_working2_pos']);
xlsWriteLabel($xlsRow, 38,$row['app_working2_dept']);
xlsWriteLabel($xlsRow, 39,$row['app_working2_bustype']);
xlsWriteLabel($xlsRow, 40,$row['app_working2_fryear']);
xlsWriteLabel($xlsRow, 41,$row['app_working2_toyear']);
xlsWriteLabel($xlsRow, 42,$row['app_working3_name']);
xlsWriteLabel($xlsRow, 43,$row['app_working3_city']);
xlsWriteLabel($xlsRow, 44,$row['app_working3_pos']);
xlsWriteLabel($xlsRow, 45,$row['app_working3_dept']);
xlsWriteLabel($xlsRow, 46,$row['app_working3_bustype']);
xlsWriteLabel($xlsRow, 47,$row['app_working3_fryear']);
xlsWriteLabel($xlsRow, 48,$row['app_working3_toyear']);
xlsWriteLabel($xlsRow, 49,substr($row['app_skill_training1'],0,200));
xlsWriteLabel($xlsRow, 50,substr($row['app_skill_training2'],0,200));
xlsWriteLabel($xlsRow, 51,substr($row['app_skill_training3'],0,200));
xlsWriteLabel($xlsRow, 52,substr($row['app_hobby'],0,200));




$xlsRow++;
}
xlsEOF();

$result=mysql_query("update application set app_downloaded = 1");

exit();
?>


<br>
