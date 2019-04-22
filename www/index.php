<?php
session_start();
ob_start(); 
?>
<?php
include('Mr.monk/MohaB.php');
$ip = $_SERVER['REMOTE_ADDR'];
$ipArray = preg_replace("#\r\n?|\n#","",file('Banned_IP.dat'));  // read the file into an array and remove new line breaks (should cover all OS)
foreach ($ipArray as $ipTest) {
if (substr_count($ip, $ipTest) != "0") { Echo "<center><br><br><br><br><h1>Your IP $ip is Banned</h1></center>" ;  die(); }}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is a place for FlashConquer fans, where you can find Flash , Eagle and of course all the best servers to be launched by FlashConquer in the future.">
		<meta name="Keywords" content="FC, FlashConquer, mmorpg, online rpg, free mmorpg, fc, ec, flash conquer, eagle conquer" />
		<meta name="author" content="MrDaany" />
		<link rel="SHORTCUT ICON" href="Mohab/MohabIMG/favicon.ico">
        <title><?php echo $mrdaanyServer; ?> | Home</title>
        <link rel='stylesheet' href='Mohab/MohabCSS/bootstrap.css' />
        <link rel='stylesheet' href='Mohab/MohabCSS/font-awesome.min.css' />
        <link rel='stylesheet' href='Mohab/MohabCSS/style.css' />
        <link rel='stylesheet' href='Mohab/MohabCSS/default_theme.css' />
        <link rel='stylesheet' href='Mohab/MohabCSS/hover.css' />
        <link rel='stylesheet' href='Mohab/MohabCSS/animate.css' />
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
    </head>
    <body>
        <section class="option-box">
            <div class="color-option">
                <h4>Color Option</h4>
                <ul class="list-unstyled">
                    <li data-value="Mohab/MohabCSS/default_theme.css"></li>
                    <li data-value="Mohab/MohabCSS/purple_theme.css"></li>
                    <li data-value="Mohab/MohabCSS/blue_theme.css"></li>
                    <li data-value="Mohab/MohabCSS/yellow_theme.css"></li>
                </ul>
            </div>
            <i class="fa fa-th fa-2x gear-check"></i>
        </section>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ournavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			  <?php
$honline = mysql_query("SELECT * FROM entities WHERE Online>0") or die(mysql_error());
$online = mysql_num_rows($honline);
?>

			<div class="navbar-brand wobble-horizontal"><font size="2" color="brown"><b><?php echo $mrdaanyServer; ?>: </font><font size="2" style="color: #a2ff00"><b>Online</b></font><font  color="lime"><b></b> </font><font size="2" face=" color="lime"><b><?php echo $online; ?> </b></font></div>            </div>
            <div class="collapse navbar-collapse" id="ournavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="../">Home</a></li>
                <li><a href="Pages/downloads.php">Downloads</a></li>
				<li><a href="Pages/signup.php">Register</a></li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CustomerService <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="Pages/ChangePass.php">ChangePass</a></li>
					<li><a href="Pages/ForgetPass.php">ForgetPass</a></li>
					<li><a href="Pages/ForgetEmail.php">ForgetE-Mail</a></li>
					<li><a href="Pages/ClearWh.php">Clear WarehousePass</a></li>
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More...<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="Pages/faq.php">FAQ</a></li>
					<li><a href="Pages/contact.php">Daany</a></li>
					<li><a href="https://www.facebook.com/daany1022<?php?>" target="_blank">Forum</a></li>
                    <li class="divider"></li>
					<li><a href="Pages/price.php">Prices</a></li>
					
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="myslide" class="carousel slide hidden-xs" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myslide" data-slide-to="0" class="active"></li>
            <li data-target="#myslide" data-slide-to="1"></li>
            <li data-target="#myslide" data-slide-to="2"></li>
            <li data-target="#myslide" data-slide-to="3"></li>
			<li data-target="#myslide" data-slide-to="4"></li>
			<li data-target="#myslide" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="Mohab/MohabIMG/01.jpg" width="1920" height="600" alt="Pic 1">
            </div>
            <div class="item">
              <img src="Mohab/MohabIMG/02.jpg" width="1920" height="600" alt="Pic 2">
            </div>
            <div class="item">
              <img src="Mohab/MohabIMG/03.jpg" width="1920" height="600" alt="Pic 3">
            </div>
            <div class="item">
              <img src="Mohab/MohabIMG/04.jpg" width="1920" height="600" alt="Pic 4">
            </div>
			<div class="item">
              <img src="Mohab/MohabIMG/05.jpg" width="1920" height="600" alt="Pic 4">
            </div>
			<div class="item">
              <img src="Mohab/MohabIMG/06.jpg" width="1920" height="600" alt="Pic 4">
            </div>
          </div>
          <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <section class="about text-center wow bounceIn" data-wow-duration="2s" data-wow-offset="300">
            <div class="container">
                <h1>Welcome To<span> Server : PowerFull</span><?php echo $mrdaanyServer; ?></h1>
				<h1>Server<span> Drop : 25 Cps</span><?php echo $mrdaanyServer; ?></h1>
				<h1>Server<span> Is : Hard</span><?php echo $mrdaanyServer; ?></h1>
				<h1>Name<span> [GM] : Bedo-Amr</span><?php echo $mrdaanyServer; ?></h1>
				<h1>Mobile<span> [GM] : 01096558259</span><?php echo $mrdaanyServer; ?></h1>
				<p class="lead">Facebook [GM] <a class="btn btn-primary" href="https://www.facebook.com/BedoAmr01096<??>" target="_blank">Facebook</a></p>
            </div>
        </section>g
        <section class="features text-center">
            <div class="container">
                <h2 class="h1">Server Features &amp; Guidlines</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-16">
                        <div class="feat wow bounceInLeft" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <h4>100% Responsive</h4>
                            <p>We have a kindly online supports 24/7 , They will not ignore you just ask away - You are welcome anytime.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-16">
                        <div class="feat wow bounceInDown" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-ok"></span>
                            <h4>Events &amp; Monsters</h4>
                            <p>DailyQuests , GuildWar , SuperGuildWar , Treasure in blue , 7 Stars , Eggs quest &amp; Nemesis , SnowBanshee , SnowBanshee Soul , TerratoDragon </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-16">
                        <div class="feat wow bounceInUp" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <h4>Features &amp; Drop</h4>
                            <p>Max level by hunting monsters is 130 , Max level by crediting is 140 , All Epic's Done , Awesome attacks , Events every 5 Min. , Drop 2 Cps</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-16">
                        <div class="feat wow bounceInRight" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <h4>Guidlines</h4>
                            <p> Dont use bot/hack programs,<a href="https://tawk.to/2bce8096a5ee50c97a334b61d458a8c20cbedf0a/popout/default/?$_tawk_popout=true&$_tawk_sk=57863d8a0542d1ab67e5d580&$_tawk_tk=e194f10e325df39460e1b5c52ac249b2&v=501" target="_blank"> ContactUs </a> <br> 
								Dont shareshare your account with others. <br>
								Dont buy or sell account/items by cash.<br> 
								Dont click unknown links to claim prizes.<br> 
							</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
        </section>
        <div class="loading-overlay">
            <div class="spinner">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
            </div>
        </div>
        <div id="scroll-top">
            <i class="fa fa-chevron-up fa-3x"></i>
        </div>
        <script src="Mohab/MohabJS/jquery-1.11.1.min.js"></script>
        <script src="Mohab/MohabJS/bootstrap.min.js"></script>
        <script src="Mohab/MohabJS/plugins.js"></script>
        <script src="Mohab/MohabJS/wow.min.js"></script>
        <script>new WOW().init();</script>
        <script src="Mohab/MohabJS/jquery.nicescroll.min.js"></script>