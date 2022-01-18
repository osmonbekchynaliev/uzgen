<?php 
	session_start();

	//Check whether the language is set in session or not
	if(!isset($_SESSION['lang']))
	{
		//If Language is not set in session then set default language as kYrgYz
		$_SESSION['lang'] = 'kg';
	}
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
		if($_GET['lang'] == 'kg'){
			$_SESSION['lang'] = 'kg';
		}
		else if ($_GET['lang'] == 'ru') {
			$_SESSION['lang'] = 'ru';		
		}
	}

	if(isset($_GET['lang']) && !empty($_GET['lang'])){
	$_SESSION['lang'] = $_GET['lang'];

	if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
	echo "<script type='text/javascript'> location.reload(); </script>";
	}
	}
	require_once $_SESSION['lang']. '.php';
?>