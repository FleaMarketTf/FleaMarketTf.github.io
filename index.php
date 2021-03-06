<?php
	require 'steamauth/steamauth.php';
?>
<!DOCTYPE html>
<html>
<head>
	
			<meta charset="utf-8">
	 		<meta name="viewport" content="width=device-width, initial-scale=1">

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css"  crossorigin="anonymous">

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<script src="index.php"></script>

			<style>

			body{
				background-color: #1a1a1a;
					margin-right: 0;
					margin-left: 0;
			}
				@media (min-width: 768px) {
					.navbar-header{
						min-width: 100%
						height: 50px;
					}
				.navbar{
					border: 0px 0px 0px 0px;
					border-radius:  0px;
					height: 100%;
					min-width:200px;
					margin-right: 0;
					margin-left: 0;
					padding-bottom: 5px;
					min-height: 100%
					width: 100%;
					position: fixed;
				}
				@font-face {
				    font-family: "TFfont";
				    src: url("fonts/tf2build.ttf") format("truetype");
				}
				body{
					font-family: "TFfont", Verdana, Tahoma;
					height: 100%
					background-color:#1a1a1a;
				}

				html{
					min-height: 100%
					background-color:#1a1a1a;

				}
					.color1{
						background-color: #e95420
					}
					.color2{
						background-color: #b83c12;
					}
				  .navbar-collapse {
				    height: auto;
				    border-top: 0;
				    box-shadow: none;
				    max-height: none;
				    padding-left:0;
				    padding-right:0;
				  }
				  .navbar-collapse.collapse {
				    display: block !important;
				    width: auto !important;
				    padding-bottom: 0;
				    overflow: visible !important;
				  }
				  .navbar-collapse.in {
				    overflow-x: visible;
				  }


				.navbar-nav,
				.navbar-nav > li,
				.navbar-left,
				.navbar-right,
				.navbar-header
				{float:none !important;}

				.navbar-right .dropdown-menu {left:0;right:auto;}
				.navbar-collapse .navbar-nav.navbar-right:last-child {
				    margin-right: 0;
				}
				}
				input{
					max-width: 250px;
				}
				.searchBtn{
					width: 250px;
				}
				.badge{
					float:right;
				}
				#searchbar{
					float:right;
					margin-top: 12px;
					background-color: #1a1a1a;
					border-radius: 10px;
					border-width: 0px;
				}
				.navbar-header.col-sm-12{
					background-color: #b83c12;	
				}
				.navbar-header.col-sm-12 > a{
					color: #ffffff;
				}
				.container.col-sm-12{
					padding: 0px 0px 0px 0px;
				}
			</style>
			<script>
				function GetTrades(){
					var Trades = 5;
					this.innerHTML(trades);
				}

			</script>
</head>
<body>

	<div id="top_header" class="navbar-header col-sm-12">
	    <a target="_blank" id="brand" class="navbar-brand" href="#">FleaMarket.TF</a>
	    <input type="textarea" name="test" placeholder=" Price Search" id="searchbar">
	    <button onclick="loginbutton();"></button>
	</div>

	<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->

<div class="container col-sm-12">
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
		<li class="dropdown">	
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="settings.html">Settings</a></li>
          <li><a href="donate.html">Donate</a></li>
        </ul>
      </li>
      
    </ul>

    <ul class="nav navbar-nav navbar-right">
     <li><a href="privatetrades.html">Your Trades <span id="TotalTrades" class="badge">15</span></a></li>
     <li ><a href="publictrades.html">Global Trades</a></li>
     <li><a href="#">Item Search</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>



</body>
</html>