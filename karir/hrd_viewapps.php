<?php
ob_start();
session_start();
require_once('Connections/conn_HRD.php');
include('functions.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CMS - Schedule of Matches</title>
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


$opts['tb'] = 'application';

$opts['key'] = 'No';

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

$opts['fdd']['app_position'] = array(
  'name'     => 'DEPT',
  'select'   => 'T',
  'options'  => 'AVCPDR', 
  'sort'     => false
);
$opts['fdd']['app_name'] = array(
  'name'     => 'Name',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => true
);
$opts['fdd']['app_sex'] = array(
  'name'     => 'Sex',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['marital'] = array(
  'name'     => 'Marital',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['pob'] = array(
  'name'     => 'Place of Birth',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['dob'] = array(
  'name'     => 'Date of Birth',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['address'] = array(
  'name'     => 'Address',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['city'] = array(
  'name'     => 'City',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['zip'] = array(
  'name'     => 'zip',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['province'] = array(
  'name'     => 'Province',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['phone'] = array(
  'name'     => 'phone',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['mobile'] = array(
  'name'     => 'mobile',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);
$opts['fdd']['email'] = array(
  'name'     => 'email',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);

/*$opts['fdd']['Region'] = array(
  'name'     => 'Region',
  'select'   => 'T',
  'textarea' => array(
    'rows' => 1,
    'cols' => 70),
  'sort'     => false
);*/

// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>
<p>&nbsp;</p>




</body>
</html>
