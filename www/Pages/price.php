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
        <title><?php echo $mrmonkServer; ?> | شحن كلي</title>
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
					<li><a href="contact.php">Contact</a></li>
                     <li><a href="<?php echo $mrmonkFroum; ?>" target="_blank">Forum</a></li>
                    <li class="divider"></li>
					<li class="active"><a href="price.php">Prices</a></li>
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
                  <li class="active">Prices List</li>
                </ol>
            </div>
        </div>
        <section class="price_table text-center">
            <div class="container">
				<center><i class="fa fa-list-alt fa-5x"></i></center>		
                <h2 class="h1"><font color="red"><?php echo $mrmonkServer; ?></font> اسعار الشحن</h2>
                
                <div class="row">
                    <br />
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary"><?php echo $mrmonkNam; ?></h2>
                            <p class="center-block">&30<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $mrmonkName; ?></li>
								<li><?php echo $mrmonkNames; ?></li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-success"><?php echo $mrmonkNam2; ?></h2>
                            <p class="center-block">&25<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $mrmonkName2; ?></li>
                                <li><?php echo $mrmonkNames2; ?></li>
                                
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-success">buy now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-info"<?php echo $mrmonkNam2; ?></h2>
                            <p class="center-block">&100<?php?>
                            <ul class="list-unstyled">
                                <li><?php echo $mrmonkName3; ?></li>
                                <li><?php echo $mrmonkNames3; ?></li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-info">buy now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-danger"><?php?>cps(B)</h2>
                            <p class="center-block">&50<?php?>
                            <ul class="list-unstyled">
                                <li><?php?>1.000.000</li>
                                <li><?php echo $mrmonkNames4; ?></li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-danger">buy now</a>
                        </div>
                    </div>
					                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">soul one p7 +12<?php?></h2>
                            <p class="center-block">&15<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>soul p7</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
										                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">soul p7 full<?php?></h2>
                            <p class="center-block">&100<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>soul p7</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
										                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">chi full<?php?></h2>
                            <p class="center-block">&20<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>chi</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
										                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">jianga full<?php?></h2>
                            <p class="center-block">&20<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>jianga</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
										                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">level 140<?php?></h2>
                            <p class="center-block">&10<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>level</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
										                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">king one <?php?></h2>
                            <p class="center-block">&20<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>king</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
										                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">inner power full<?php?></h2>
                            <p class="center-block">&15<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>inner power</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
										                   <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">level 145<?php?></h2>
                            <p class="center-block">&30<?php?></p>
                            <ul class="list-unstyled">
                                <li><?php echo $soul; ?></li>
								<li><?php?>145</li>
                            </ul>
                            <a href="https://www.facebook.com/BedoAmr01096" class="btn btn-primary">buy now</a>
                        </div>
                    </div>
                    <h2>مع تحيات الجي ام </h2>
                <hr><i class="fa fa-hand-o-down fa-2x"></i>
                <p class="lead">ملاحظه<a href="https://www.facebook.com/conquerdaany/<?php?>" target="_blank"> </a>كل لما تشحن بسعر 30ج الي 50ج اتاخد هديه  <a href="https://www.facebook.com/conquerdaany/<?php?>" target="_blank"> تابعونه <a/>.</p>
                </div>
            </div>
                    <p>&nbsp;</p>
							<p>&nbsp;</p>
                </div>
                
            </div>
        </section>
             <section class="footer">
			 <Script Language='Javascript'>
document.write(unescape(('%3Cdiv%20class%3D%22copyright%20text-center%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Copyright%20%26copy%3B%20%3Ca%20href%3D%22https%3A%2F%2Fwww.facebook.com%2Fdaany1022%22%20target%3D%22_blank%22%3E%3Cspan%3EMrDaany%3C%2Fspan%3E%3C%2Fa%3E%20%26%20%3Ca%20href%3D%22https%3A%2F%2FFB.com%2FMonk0%22%20target%3D%22_blank%22%3E%3Cspan%3EMr.Daany%3C%2Fspan%3E%3C%2Fa%3E%20to%20Server%3A'))%3B'));
</Script> <?php echo $mrmonkServer; ?> <Script Language='Javascript'>
document.write(unescape('%61%6C%6C%20%72%69%67%68%74%73%20%72%65%73%65%72%76%65%64%20%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E'));
</Script>
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
<title><?php echo $mrmonkServer; ?> | Contact Us</title>