<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>application</title>
<style type="text/css">
	hr.pme-hr		     { border: 0px solid; padding: 0px; margin: 0px; border-top-width: 1px; height: 1px; }
	table.pme-main 	     { border: #004d9c 1px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	table.pme-navigation { border: #004d9c 0px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	th.pme-header	     { border: #004d9c 1px solid; padding: 4px; background: #add8e6; }
	td.pme-key-0, td.pme-value-0, td.pme-help-0, td.pme-navigation-0, td.pme-cell-0,
	td.pme-key-1, td.pme-value-1, td.pme-help-0, td.pme-navigation-1, td.pme-cell-1,
	td.pme-sortinfo, td.pme-filter { border: #004d9c 1px solid; padding: 3px; }
	td.pme-buttons { text-align: left;   }
	td.pme-message { text-align: center; }
	td.pme-stats   { text-align: right;  }
</style>
</head>
<body>
<?php

/*
 * IMPORTANT NOTE: This generated file contains only a subset of huge amount
 * of options that can be used with phpMyEdit. To get information about all
 * features offered by phpMyEdit, check official documentation. It is available
 * online and also for download on phpMyEdit project management page:
 *
 * http://platon.sk/projects/main_page.php?project_id=5
 *
 * This file was generated by:
 *
 *                    phpMyEdit version: unknown
 *       phpMyEdit.class.php core class: 1.188
 *            phpMyEditSetup.php script: 1.48
 *              generating setup script: 1.48
 */

// MySQL host name, user name, password, database, and table
$opts['hn'] = 'localhost';
$opts['un'] = 'tryme';
$opts['pw'] = 'hacked';
$opts['db'] = 'reqruitment';
$opts['tb'] = 'application';

// Name of field which is the unique key
$opts['key'] = 'app_id';

$opts['key_type'] = 'int';

$opts['sort_field'] = array('app_id');

$opts['inc'] = 10;

$opts['options'] = 'ACD';

$opts['multiple'] = '4';

$opts['navigation'] = 'UBG';

$opts['display'] = array(
	'form'  => true,
	'query' => false,
	'sort'  => false,
	'time'  => true,
	'tabs'  => false
);

$opts['js']['prefix']               = 'PME_js_';
$opts['dhtml']['prefix']            = 'PME_dhtml_';
$opts['cgi']['prefix']['operation'] = 'PME_op_';
$opts['cgi']['prefix']['sys']       = 'PME_sys_';
$opts['cgi']['prefix']['data']      = 'PME_data_';

$opts['language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'];


$opts['fdd']['app_id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 10,
  'default'  => '0',
  'sort'     => true
);
$opts['fdd']['app_position'] = array(
  'name'     => 'DEPT',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_name'] = array(
  'name'     => 'NAME',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_sex'] = array(
  'name'     => 'SEX',
  'select'   => 'T',
  'maxlen'   => 20,
  'sort'     => true
);
$opts['fdd']['app_marital'] = array(
  'name'     => 'MARITAL',
  'select'   => 'T',
  'maxlen'   => 30,
  'sort'     => true
);
$opts['fdd']['app_pob'] = array(
  'name'     => 'PLACE OF BIRTH',
  'select'   => 'T',
  'maxlen'   => 30,
  'sort'     => true
);
$opts['fdd']['app_dd'] = array(
  'name'     => 'DD',
  'select'   => 'T',
  'maxlen'   => 2,
  'sort'     => true
);
$opts['fdd']['app_mm'] = array(
  'name'     => 'MM',
  'select'   => 'T',
  'maxlen'   => 3,
  'sort'     => true
);
$opts['fdd']['app_yyyy'] = array(
  'name'     => 'YYYY',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_address'] = array(
  'name'     => 'ADDRESS',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_city'] = array(
  'name'     => 'CITY',
  'select'   => 'T',
  'maxlen'   => 100,
  'sort'     => true
);
$opts['fdd']['app_zip'] = array(
  'name'     => 'ZIP',
  'select'   => 'T',
  'maxlen'   => 5,
  'sort'     => true
);
$opts['fdd']['app_province'] = array(
  'name'     => 'PROVINCE',
  'select'   => 'T',
  'maxlen'   => 100,
  'sort'     => true
);
$opts['fdd']['app_phone'] = array(
  'name'     => 'PHONE',
  'select'   => 'T',
  'maxlen'   => 30,
  'sort'     => true
);
$opts['fdd']['app_mobile'] = array(
  'name'     => 'MOBILE',
  'select'   => 'T',
  'maxlen'   => 30,
  'sort'     => true
);
$opts['fdd']['app_email'] = array(
  'name'     => 'EMAIL',
  'select'   => 'T',
  'maxlen'   => 150,
  'sort'     => true
);
$opts['fdd']['app_S1_type'] = array(
  'name'     => 'S1-TYPE',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S1_major'] = array(
  'name'     => 'S1-MAJOR',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S1_name'] = array(
  'name'     => 'S1-NAME',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S1_city'] = array(
  'name'     => 'S1-CITY',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S1_year'] = array(
  'name'     => 'S1-YEAR',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_S1_gpa'] = array(
  'name'     => 'S1-GPA',
  'select'   => 'T',
  'maxlen'   => 12,
  'sort'     => true
);
$opts['fdd']['app_S2_type'] = array(
  'name'     => 'S2-TYPE',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S2_major'] = array(
  'name'     => 'S2-MAJOR',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S2_name'] = array(
  'name'     => 'S2-NAME',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S2_city'] = array(
  'name'     => 'S2-NAME',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_S2_year'] = array(
  'name'     => 'S2-YEAR',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_S2_gpa'] = array(
  'name'     => 'S2-GPA',
  'select'   => 'T',
  'maxlen'   => 12,
  'sort'     => true
);
$opts['fdd']['app_working1_name'] = array(
  'name'     => 'WORK1-NAME',
  'select'   => 'T',
  'maxlen'   => 100,
  'sort'     => true
);
$opts['fdd']['app_working1_city'] = array(
  'name'     => 'WORK1-CITY',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working1_pos'] = array(
  'name'     => 'WORK1-POSITION',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working1_dept'] = array(
  'name'     => 'WORK1-DEPT',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working1_bustype'] = array(
  'name'     => 'WORK1-BUSINESS',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working1_fryear'] = array(
  'name'     => 'WORK1-FROM',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_working1_toyear'] = array(
  'name'     => 'WORK1-TO',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_working1_brief'] = array(
  'name'     => 'WORK1-DESCR',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_working2_name'] = array(
  'name'     => 'WORK2-NAME',
  'select'   => 'T',
  'maxlen'   => 100,
  'sort'     => true
);
$opts['fdd']['app_working2_city'] = array(
  'name'     => 'WORK2-CITY',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working2_pos'] = array(
  'name'     => 'WORK2-POSITION',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working2_dept'] = array(
  'name'     => 'WORK2-DEPT',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working2_bustype'] = array(
  'name'     => 'WORK2-BUSINESS',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working2_fryear'] = array(
  'name'     => 'WORK2-FROM',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_working2_toyear'] = array(
  'name'     => 'WORK2-TO',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_working2_brief'] = array(
  'name'     => 'WORK2-DESCR',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_working3_name'] = array(
  'name'     => 'WORK3-NAME',
  'select'   => 'T',
  'maxlen'   => 100,
  'sort'     => true
);
$opts['fdd']['app_working3_city'] = array(
  'name'     => 'WORK3-CITY',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working3_pos'] = array(
  'name'     => 'WORK3-POSITION',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working3_dept'] = array(
  'name'     => 'WORK3-DEPT',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working3_bustype'] = array(
  'name'     => 'WORK3-BUSINESS',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['app_working3_fryear'] = array(
  'name'     => 'WORK3-FROM',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_working3_toyear'] = array(
  'name'     => 'WORK3-TO',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['app_working3_brief'] = array(
  'name'     => 'WORK3-DESCR',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_skill_training1'] = array(
  'name'     => 'KOMPUTER',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_skill_training2'] = array(
  'name'     => 'BAHASA ASING',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_skill_training3'] = array(
  'name'     => 'LAINNYA',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['app_hobby'] = array(
  'name'     => 'HOBI',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);


// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>


</body>
</html>