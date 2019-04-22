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
        <title><?php echo $mrmonkServer; ?> | ForgetPassword </title>
        <link rel='stylesheet' href='../Mohab/MohabCSS/bootstrap.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/font-awesome.min.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/style.css' />
		<link rel='stylesheet' href='../Mohab/MohabCSS/pages.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/default_theme.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/hover.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/animate.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/css.css'>
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
              <a class="navbar-brand wobble-horizontal" href="https://www.facebook.com/daany1022<?php?>">Server :Daany <span><?php?></span></a>
            </div>
            <div class="collapse navbar-collapse" id="ournavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="../">Home</a></li>
                <li><a href="downloads.php">Downloads</a></li>
                <li><a href="signup.php">Register</a></li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CustomerService <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="ChangePass.php">ChangePass</a></li>
					<li class="active"><a href="ForgetPass.php">ForgetPass</a></li>
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
                  <li class="active">ForgetPassword</li>
                </ol>
            </div>
        </div>
        <section class="contact-us text-center">
            <div class="fields">
                <div class="container">
                    <div class="row">
						<br />
                        <i class="fa fa-book fa-5x"></i><i class="fa fa-pencil fa-5x"></i>
                        <h2 class="h1">&quot; ForgetPassword &quot;</h2>
                        <p class="lead">Please, Fill Up All Fields .</p>
						<p>&nbsp;</p>
                        <form method='post' action=''>
                            <div class="col-md-6 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="400">
                                <div class="form-group">
                                    <input name="Username" type="text" class="form-control input-lg" placeholder="User Name ">
                                </div>
								<div class="form-group">
                                    <input name="Email" type="email" class="form-control input-lg" placeholder="E-mail Address ">
                                </div>
								<div class="form-group">
                                    <input name="Password" type="Password" class="form-control input-lg" placeholder="New Password">
                                </div>
								<div class="form-group">
                                    <input name="pass2" type="password" class="form-control input-lg" placeholder="Confirm New Password">
                                </div>
                                <button  type="submit" name="submit" class="btn btn-danger btn-lg btn-block">Restore</button>
								<p>&nbsp;</p>
								<?php
			if (isset($submit)) {
########################### by Mr.Monk ##############################
			mysql_select_db($mrmonkDB);
			$Username=$_POST["Username"];
			$Email=$_POST["Email"];
			$Password=$_POST["Password"];
			$pass2=$_POST["pass2"];
			$Username = mysql_real_escape_string($_POST['Username']); 
			$Email = mysql_real_escape_string($_POST['Email']); 
			$Password = mysql_real_escape_string($_POST['Password']); 
			$pass2 = mysql_real_escape_string($_POST['pass2']);
			if ($_POST['Password']!= $_POST['pass2'])
			{ $errors .= "<bb><font color='red'><div class='trix2'><center>New Passwords did not match.</center></div></font><br /></bb> \n"; }
			$query = mysql_query("SELECT Username FROM accounts WHERE Username='".$Username."' and Email='".$Email."'");
			if(mysql_num_rows($query) != 1)
			{ $errors .= "<bb><font color='red'><div class='trix2'><center>Email you entered was incorrect.</center></div></font><br /></bb> \n"; }
			$query = mysql_query("SELECT Username FROM accounts WHERE Username='".$Username."'");
			if(mysql_num_rows($query) != 1)
			{ $errors .= "<bb><font color='red'><div class='trix2'><center>Username is not found.</center></div></font><br /></bb> \n"; }
			if(!empty($errors))
			{ echo "<div class='error' align='center'>Found Errors</div><div class='error' align='center'>".nl2br($errors)."</div>"; }
			else {
			$success=mysql_query("UPDATE accounts SET Password='".$Password."' WHERE Username='".$Username."'")or die(mysql_error());
			}
			if($success) {
			echo"<font color='lime'><div class='trix2'><center>Password has been change successfully !.</center></div></font><br />";
			}
			}
			?>
							<center>							</div>							
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