<?php
	include "apikey.php";
	include "Openid.php";

	$OpenID = new LightOpenID("www.fleamarkettf.github.io")
	session_start();

	if(!$OpenID->node){

		if(isset($_GET('login'))){
			$Open->indentity = "http://steamcomunity.com/openid"
			header("location: ($Open->authUrl())");
		}
		if(!isset($_SESSION['T2SteamAuth'])){
			$login = "<div id=\"login\">Welcome Guest!<img src=\"steamcommunity.com/public/images/signinthroughsteam/sits_small.png\"/></a> to *website action*.com</div>";
		}
	}
?>