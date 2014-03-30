<?php


function valid_email($str)
{
return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

function valid_name($str)
{
return ( ! preg_match("/^[a-zA-Z\ ]+$/u", $str)) ? FALSE : TRUE;
}

function random_string($type = 'alnum', $len = 8)
{					
	switch($type)
	{
		case 'alnum'	:
		case 'numeric'	:
		case 'nozero'	:
		
				switch ($type)
				{
					case 'alnum'	:	$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
						break;
					case 'numeric'	:	$pool = '0123456789';
					    
					
					
					
					
					
					
					
					
						break;
					case 'nozero'	:	$pool = '123456789';
						break;
				}

				$str = '';
				for ($i=0; $i < $len; $i++)
				{
					$str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
				}
				return $str;
		  break;
		case 'unique' : return md5(uniqid(mt_rand()));
		  break;
	}
}


function checkUnique($table, $field, $compared)
{
	$query = mysql_query('SELECT  '.mysql_real_escape_string($field).' FROM '.mysql_real_escape_string($table).' WHERE '.mysql_real_escape_string($field).' = "'.mysql_real_escape_string($compared).'"');
//echo $query;
if(mysql_num_rows($query)==0)
	{
		return TRUE;
	}
	else {
		return FALSE;
	}
} 


function numeric($str)   
{   
    return ( ! ereg("^[0-9\.]+$", $str)) ? FALSE : TRUE;   
}  


function alpha_numeric($str)   
{   
    return ( ! preg_match("/^([-a-z0-9])+$/i", $str)) ? FALSE : TRUE;   
}  


function checkLogin($levels)
	{
		if(!$_SESSION['logged_in'])
		{
			$access = FALSE;
		}
		else {
			$kt = split(' ', $levels);
			
			$query = mysql_query("SELECT Level_access FROM silat_lidah2.users WHERE ID = '".mysql_real_escape_string($_SESSION['user_id'])."'");
			$row = mysql_fetch_assoc($query);
			
			$access = FALSE;
			
			while(list($key,$val)=each($kt))
			{
			    //echo $val;
				if($val==$row['Level_access'])
				{//if the user level matches one of the allowed levels
					$access = TRUE;
				}
			}
		}
		if($access==FALSE)
		{
			header("Location: login.php");
		}
		else {
		//do nothing: continue
		}
		
	}


function isLogin($dummy_v)
	{
		if(!$_SESSION['logged_in'])
		{
			return FALSE;
		}
		else {
            return TRUE;
		}

	}
	      

function cetak($tulisan)
{
	return ( str_replace('\"',"&quot;", str_replace("\'","&#39;", str_replace("\n","\n<br>", $tulisan))) ); 
}

function add_log($database, $silatlidah, $filedesc)
{
	mysql_select_db($database, $silatlidah);
	$query_log = "INSERT INTO silat_lidah2.access_log (`log_date`, `log_time`, `log_user`, `log_email`, `log_page`) VALUES ('".date("Y-m-d")."', '".date("H:i:s")."', '".$_COOKIE['account_name']."', '".$_COOKIE['account_email']."', '".$filedesc."')";
	$RS_log = mysql_query($query_log, $silatlidah) or die(mysql_error());
	
	return TRUE;

}	

function print_date($datestr)
{
    $monthid = substr($datestr, 5, 2);
	
	switch ($monthid)
				{
					case '01' : $monthstr = 'Jan'; break;
					case '02' : $monthstr = 'Feb'; break;
					case '03' : $monthstr = 'Mar'; break;
					case '04' : $monthstr = 'Apr'; break;
					case '05' : $monthstr = 'May'; break;
					case '06' : $monthstr = 'Jun'; break;
					case '07' : $monthstr = 'Jul'; break;
					case '08' : $monthstr = 'Aug'; break;
					case '09' : $monthstr = 'Sep'; break;
					case '10' : $monthstr = 'Oct'; break;
					case '11' : $monthstr = 'Nov'; break;
					case '12' : $monthstr = 'Dec'; break;
				}
				
	$daystr = substr($datestr, 8, 2);
	$yearstr = substr($datestr, 0, 4);
	
	$printstr = $daystr.' '.$monthstr.' '.$yearstr;

	return ($printstr);		
}
	

?>