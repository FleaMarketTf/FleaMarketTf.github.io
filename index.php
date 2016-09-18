<?php
	include "apikey.php";
	include "Openid.php";

	$OpenID = new LightOpenID("www.fleamarkettf.github.io/index.html")
	session_start();

	if(!$OpenID->node){

		if(isset($_GET('login'))){
			$Open->indentity = "http://steamcomunity.com/openid"
			header("location: ($Open->authUrl())");
		}
		if(!isset($_SESSION['T2SteamAuth'])){
			$login = "<div id=\"login\">Welcome Guest!<img src=\"steamcommunity.com/public/images/signinthroughsteam/sits_small.png\"/></a> to *website action*.com</div>";
		}
		
	}elseif($OpenID->node == "cancel"){
		echo "User Authentication has failed.";

	}else(if(!isset($_SESSION['T2SteamAuth']))){
		$_SESSION['T2SteamAuth'] = $OpenID->validate() ? $OpenID->indentity : null;
		$_SESSION['T2SteamAuth'] = str_replace("http://steamcomunity.com/openid/id/", "", $_SESSION['T2SteamAuth']);
		if($_SESSION['T2SteamAuth'] !== null){
			$Steam64 = str_replace("http://steamcomunity.com/openid/id/","",$_SESSION['T2SteamAuth'])
			$Profile = get_contents("httpL//api.steampowered.com/ISteamUser/GetPlayerSumaries/v0002/?key=($api)$steamids=($Steam64)");
			$buffer = fopen("cache/($Steam64).json","w+");
			fwrite($buffer, $Profile);
			fclose($buffer);
		}
		header("Location: index.php");
	}
	if(isset($_SESSION['T2SteamAuth'])){
		$login = "<div id=\"login\"><a href=\"?logout\">logout</a></div>";
	}
	if(isset($_GET['logout'])){
		unset($_SESSION['T2SteamAuth']);
		unset($_SESSION['T2SteamID64']);
		header("Location: index.php");
	}
echo $login;
?>