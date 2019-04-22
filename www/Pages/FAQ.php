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
        <title><?php echo $mrmonkServer; ?> | FAQ</title>
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
                    <li class="active"><a href="faq.php">FAQ</a></li>
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
                  <li class="active">FAQ</li>
                </ol>
            </div>
        </div>
        <section class="faq text-center">
            <div class="container">
                <h1>شحن</h1>
                <hr>
                <p class="lead"> PowerFullاسعار الشحن داخل لعبة</p>
            </div>
        </section>
        <section class="faq-questions">
            <div class="container">
                <div class="panel-group" id="accordion" roles="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-one">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-one" aria-expanded="true" arial-controls="collapse-one">
                                    #سعر Level 140?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-one" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-one">
                            <div class="panel-body">
                                 10جنيه
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-two">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-two" aria-expanded="true" arial-controls="collapse-two">
                                    #سعر gold prize ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-two" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-two">
                            <div class="panel-body">
                                25 جنيه <a href="monsters.html"></a> .<br />
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-three">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-three" aria-expanded="true" arial-controls="collapse-three">
                                    #سعر التشي اسطوري ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-three" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-three">
                            <div class="panel-body">
                                20 جنيه +هديه .<br />  
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-four">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-four" aria-expanded="true" arial-controls="collapse-four">
                                    #سعر الجانغ اسطوري?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-four" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-four">
                            <div class="panel-body">
								 <span> </span>20جنيه+هديه<br />
								 <span> </span><br />
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-five">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-five" aria-expanded="true" arial-controls="collapse-five">
                                    #VIP 6 ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-five" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-five">
                            <div class="panel-body">
                                30جنيه <br />
								                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-six">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-six" aria-expanded="true" arial-controls="collapse-six">
                                    #سلاح صول 7 +12 -7?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-six" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-six">
                            <div class="panel-body">
                                15جنيه <a href="monsters.html"></a> .<br />
                            </div>
                        </div>
                    </div>
									                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-seven">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-seven" aria-expanded="true" arial-controls="collapse-seven">
                                    #صول 7 كامل +12 ?
                                </a>
                            </h4>
                        </div>
						
                        <div id="collapse-seven" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-seven">
                            <div class="panel-body">
                               100 جنيه +هديه <a href="monsters.html"></a> .<br />
												                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-8">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-8" aria-expanded="true" arial-controls="collapse-six">
                               #75.000 cps  ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-8" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-8">
                            <div class="panel-body">
                                10 جنيه <a href="monsters.html"></a> .<br />
                            </div>
                        </div>
                    </div>
					                   <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-9">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-9" aria-expanded="true" arial-controls="collapse-9">
                               #كنج اول   ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-9" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-9">
                            <div class="panel-body">
                                20 جنيه <a href="monsters.html"></a> .<br />
                            </div>
                        </div>
                    </div>
										                   <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-10">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-10" aria-expanded="true" arial-controls="collapse-10">
                               #10.000.000 cps?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-10" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-10">
                            <div class="panel-body">
                                250 جنيه +هديه مليون سي بي اضافيه<a href="monsters.html"></a> .<br />
                            </div>
                        </div>
                    </div>
															                   <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-11">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-11" aria-expanded="true" arial-controls="collapse-11">
                               #اكمال الطاقة الداخليه ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-11" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-11">
                            <div class="panel-body">
                                15 جنيه<a href="monsters.html"></a> .<br />
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section class="faq text-center">
            <div class="container">
                <h2>مع تحيات الجي ام </h2>
                <hr><i class="fa fa-hand-o-down fa-2x"></i>
                <p class="lead">ملاحظه<a href="https://www.facebook.com/conquerdaany/<?php?>" target="_blank"> </a>كل لما تشحن بسعر 30ج الي 50ج اتاخد هديه  <a href="https://www.facebook.com/conquerdaany/<?php?>" target="_blank"> تابعونه <a/>.</p>
            </div>
        </section>
         <section class="footer">
        </section>
        <div id="scroll-top">
            <i class="fa fa-chevron-up fa-3x"></i>
        </div>
        <script src="../Mohab/MohabJS/jquery-1.11.1.min.js"></script>
        <script src="../Mohab/MohabJS/bootstrap.min.js"></script>
        <script src="../Mohab/MohabJS/plugins.js"></script>
        <script src="../Mohab/MohabJS/jquery.nicescroll.min.js"></script>
    </body>
</html>