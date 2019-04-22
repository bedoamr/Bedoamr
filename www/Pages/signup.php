<?php include('../Mr.Monk/MohaB.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is a place for FlashConquer fans, where you can find Flash , Eagle and of course all the best servers to be launched by FlashConquer in the future.">
		<meta name="Keywords" content="FC, FlashConquer, mmorpg, online rpg, free mmorpg, fc, ec, flash conquer, eagle conquer" />
		<meta name="author" content="MrSniper" />
		<link rel="SHORTCUT ICON" href="../Mohab/MohabIMG/favicon.ico">
        <title><?php echo $mrmonkServer; ?> | Free Registration </title>
        <link rel='stylesheet' href='../Mohab/MohabCSS/bootstrap.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/font-awesome.min.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/style.css' />
		<link rel='stylesheet' href='../Mohab/MohabCSS/pages.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/default_theme.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/hover.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/animate.css' />
        <link rel='stylesheet' href='../Mohab/MohabMohab/MohabCSS/css.css'>
    </head>
    <body>
        <section class="option-box">
            <div class="color-option">
                <h4>Color Option</h4>
                <ul class="list-unstyled">
                    <li data-value="../Mohab/MohabCSS/default_theme.css"></li>
                    <li data-value="../Mohab/MohabCSS/purple_theme.css"></li>
                    <li data-value="../Mohab/MohabCSS/blue_theme.css"></li>
                    <li data-value="../Mohab/MohabCSS/yellow_theme.css"></li>
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
              <a class="navbar-brand wobble-horizontal" href="https://www.facebook.com/daany1022<?php?>">Server : <span><?php echo $mrmonkServer; ?></span></a>
            </div>
            <div class="collapse navbar-collapse" id="ournavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../">Home</a></li>
                <li><a href="downloads.php">Downloads</a></li>
                <li class="active"><a href="signup.php">Register</a></li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CustomerService <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="ChangePass.php">ChangePass</a></li>
					<li><a href="ForgetPass.php">ForgetPass</a></li>
					<li><a href="ForgetEmail.php">ForgetE-Mail</a></li>
					<li><a href="ClearWh.php">Clear WarehousePass</a></li>
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More...<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="faq.php">FAQ</a></li>
					<li><a href="contact.php">Contact</a></li>
                     <li><a href="<?php echo $mrmonkFroum; ?>" target="_blank">Forum</a></li>
                    <li class="divider"></li>
					<li><a href="price.php">Prices</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="breadcrumb-holder">
            <div class="container">
                <ol class="breadcrumb">
                  <li><a href="../">Home</a></li>
                  <li class="active">Registration</li>
                </ol>
            </div>
        </div>
        <section class="contact-us text-center">
            <div class="fields">
                <div class="container">
                    <div class="row">
						<br />
                        <i class="fa fa-book fa-5x"></i><i class="fa fa-pencil fa-5x"></i>
                        <h2 class="h1">&quot; Free Registration &quot;</h2>
                        <p class="lead">Please, Fill Up All Fields .</p>
						<p>&nbsp;</p>
                        <form method="post" action="" role="form">
                            <div class="col-md-6 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="400">
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control input-lg" placeholder="اسم المستخدم">
                                </div>
								<div class="form-group">
                                    <input name="password" type="password" class="form-control input-lg" placeholder="كلمة السر">
                                </div>
								<div class="form-group">
                                    <input name="password2" type="password" class="form-control input-lg" placeholder="اعادة كلمة السر">
                                </div>
								<div class="form-group">
                                    <input name="email" type="email" class="form-control input-lg" placeholder="البريد الاكتروني">
                                </div>
                                <div class="form-group">
                                    <input name="mobilenumber" type="text" class="form-control input-lg" placeholder="رقم التليفون">
                                </div>
                                <button  type="submit" name="Submit" class="btn btn-danger btn-lg btn-block">تسجيل</button>
								<p>&nbsp;</p>
								<?php
if($_POST['username'])
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$repassword = trim($_POST['password2']);
$email = trim($_POST['email']);
$mobilenumber = trim($_POST['mobilenumber']);
mysql_select_db($mrmonkAccDB);
$check = mysql_query('SELECT * FROM accounts WHERE Username = "'.$username.'"') or die(mysql_error());
if(mysql_num_rows($check) == 0)	{
mysql_query('INSERT INTO accounts(Username,Password,IP,Email,mobilenumber) VALUES ("'.$username.'","'.$password.'","'.$_SERVER['REMOTE_ADDR'].'", "'.$email.'", "'.$mobilenumber.'")') or die(mysql_error());
echo '<font color="lime"><div class="trix2"><center>Your Account Has Been Successfully Created.</center></div></font><br />';
} else {
echo '<font color="red"><div class="trix2"><center>Sorry : this username already access.</center></div></font><br />';
}
}
?>							
                            </div>							
                        </form>
                    </div>
					<p>&nbsp;</p>
						<p>&nbsp;</p>
							<p>&nbsp;</p>	
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
        <script src="../Mohab/MohabJS/jquery-1.11.1.min.js"></script>
        <script src="../Mohab/MohabJS/bootstrap.min.js"></script>
        <script src="../Mohab/MohabJS/plugins.js"></script>
        <script src="../Mohab/MohabJS/wow.min.js"></script>
        <script>new WOW().init();</script>
        <script src="../Mohab/MohabJS/jquery.nicescroll.min.js"></script>
    </body>
</html>