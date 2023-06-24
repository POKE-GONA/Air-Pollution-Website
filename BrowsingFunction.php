<?php 

function recordBrowse($URL)
{
	if (isset($_SESSION['Browsing'])) 
{
	$count=count($_SESSION['Browsing']);

	if ($count==0) 
	{
			$_SESSION['Browsing'][0]['PageName']=$URL;
			$_SESSION['Browsing'][0]['DateTime']=date ('Y-m-d H:i:s');


	}
	else
	{
		$_SESSION['Browsing'][$count]['PageName']=$URL;
		$_SESSION['Browsing'][$count]['DateTime']=date ('Y-m-d H:i:s');
	}
}
else
{
	$_SESSION['Browsing']=array();
}

}


 ?>