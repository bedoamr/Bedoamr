<?php include('../Mr.Monk/MohaB.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is a place for FlashConquer fans, where you can find Flash , Eagle and of course all the best servers to be launched by FlashConquer in the future.">
		<meta name="Keywords" content="FC, FlashConquer, mmorpg, online rpg, free mmorpg, fc, ec, flash conquer, eagle conquer" />
		<meta name="author" content="MrDaany" />
		<link rel="SHORTCUT ICON" href="../Mohab/MohabIMG/favicon.ico">
        <title><?php echo $mrmonkServer; ?> | Contact Us</title>
        <link rel='stylesheet' href='../Mohab/MohabCSS/bootstrap.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/font-awesome.min.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/style.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/pages.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/default_theme.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/hover.css' />
        <link rel='stylesheet' href='../Mohab/MohabCSS/css.css'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:900'>
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
              <a class="navbar-brand wobble-horizontal" href="<?php echo $mrmonkFace; ?>">Server : <span><?php echo $mrmonkServer; ?></span></a>
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
					<li><a href="ForgetPass.php">ForgetPass</a></li>
					<li><a href="ForgetEmail.php">ForgetE-Mail</a></li>
					<li><a href="ClearWh.php">Clear WarehousePass</a></li>
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More...<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="faq.php">FAQ</a></li>
					<li  class="active"><a href="contact.php">Contact</a></li>
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
                  <li class="active"><a href="<a href="<?php echo $mrmonkFace; ?>" target="_blank">Contact Us</a></li>
                </ol>
            </div>
        </div>
        <section class="about-us text-center">
            <div class="container">
                <h1>Contact Us</h1>
                <hr>
                <p class="lead">We Create A Professional TeamWork To Support You . <br> Just Contact Us , Or Leave Your Message And We Will Contact You ASAP .</p>
                <img class="img-thumbnail" src="../Mohab/MohabIMG/company_team.jpg" alt="Company Team">
            </div>
        </section>
        <section class="about-features text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-comments-o  fa-5x"></i>
                        <h3>100% Responsive</h3>
                        <p><p>We have a kindly online supports 24/7 , They will not ignore you just ask away - You are welcome anytime.</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-question fa-5x"></i>
                        <h3>Have A Question ?!</h3>
                        <p>Don't Hesitate To <a href="">Contact Us</a> , Just Ask Away . <br /> Or Click <a href="faq.php">Here</a> To Find Out More Answers .</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-share-alt fa-5x"></i>
                        <h3>Share</h3>
                        <p>You Can Share Your Ideas And Your Opinion With Us To Make It The Best Just Contact Us Here ,<br /> In Game Or On Our <a href="<?php echo $mrmonkFroum; ?>" target="_blank">Forum</a> .</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-ceo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <a href="<a href="<?php echo $mrmonkFace; ?>" target="_blank"><img class="img-responsive" src="../Mohab/MohabIMG/ceo.png" alt="CEO"></a>
                    </div>
                    <div class="col-sm-7">
                        <h2 class="h1">We Listen , We Care !</h2>
                        <p class="lead">You Will Just Click [GM] Pic At Your Left ,<br /> You Will Directly Begin <br /> A Conversation With One Of Our Support Team .<br />Or Click The Contact Us Button Below .</p>
                        <i class="fa fa-hand-o-down fa-3x"></i><br><br>
						<a href="<?php echo $mrmonkFace; ?>" target="_blank" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
        <div id="scroll-top">
            <i class="fa fa-chevron-up fa-3x"></i>
        </div>
        <script src="../Mohab/MohabJS/jquery-1.11.1.min.js"></script>
        <script src="../Mohab/MohabJS/bootstrap.min.js"></script>
        <script src="../Mohab/MohabJS/plugins.js"></script>
        <script src="../Mohab/MohabJS/jquery.nicescroll.min.js"></script>
    </body>
</html>