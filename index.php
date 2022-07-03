<?php
include_once 'include/functions.php';
$connect=config();
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $settings['title'];?></title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo $settings['description'];?>">
<meta name="keywords" content="Agrox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js--->
<!--JS for animate-->

	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->

<!---webfont--->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---webfont--->
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
 <link rel="stylesheet" type="text/css" href="css/style9.css" />      
</head>
<body>
	<!---header--->
		<div class="header-section">
			<div class="container">
				<div class="head-bottom">
					<div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
						<h1><a href="index.html"><?php echo $settings['brand1'];?><span><?php echo $settings['brand2'];?></span></a></h1>
					</div>
				</div>
			</div>
		</div>
		<!---header--->

		<!---banner--->
		<div class="banner">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>


                        <!---menu control start-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
                                <?php
                                $row=listmenudefault();
                                foreach ($row as $val):
                                ?>

								<li><a href="<?php echo $val['url'];?>" class="wow fadeInDownBig" data-wow-delay=".2s"><?php echo $val['title'];?></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $rows=listSubmenudefault($val['id']);
                                    foreach ($rows as $value):

                                    ?>
                                    <li><a href="<?php echo $value['url'];?>"><?php echo $value['title'];?></a></li>
                                    <?php
                                    endforeach;
                                    ?>
                                </ul>
                                </li>

                                <?php
                                endforeach;
                                ?>

                            </ul>
						</div>
					</div>
				</nav>
				<div class="banner-center">
					<marquee><h3>
                            <?php echo $settings['textbaner'];?></h3></marquee>
				</div>
				
			</div>
		</div>
<!---banner-->
    <!---menu control end-->



	<!---welcome-->
    <div class="content">
        <div class="welcome-section">
            <div class="container">
                <div class="banner-bottom">
                    <div class="banner-grids">
                        <?php
                        $widget=listwidgetadmin();
                        foreach ($widget as $val1):
                            ?>
						<div class="col-md-4 banner-grid wow fadeInRight animated" data-wow-delay=".5s">
							<h4>
                                <?php echo $val1['title'];?></h4>
							<div class="ban1">
								<div class="ban-images  view fourth-effect">
									<img src="admin/<?php echo $val1['img'];?>" class="img-responsive" alt=""/>
								<div class="mask"></div>
								</div>
								<p><?php echo $val1['text'];?></p>
								<a href="<?php echo $val1['url_details'];?>" class="button hvr-wobble-bottom">اطلاعات بیشتر</a>
							</div>
						</div>
                        <?php
                        endforeach;
                        ?>
                        <div class="clearfix"></div>
					</div>
				</div>


                <h2>خوش آمدید</h2>
                <div class="welcome-grids">
                    <?php
                    $widget2=listwidget2admin();
                    foreach ($widget2 as $val2):
                        ?>
                    <div class="col-md-3 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">
                        <div class="welcome-text">
                            <h4>

                                <?php echo $val2['title'];?> </h4>
                            <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                            <p><?php echo $val2['text'];?></p>
                        </div>
                        <div class="welcome-icon">
                            <img src="admin/<?php echo $val2['img'];?>">
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
		<!---welcome-->
        <!---product control start-->
        <div class="product-section">
            <div class="container">
<!--                <div style="height: 200px"></div>-->
                <h3>
                    <?php echo $settings['title_product'];?></h3>
                <div class="product-grids">
                    <?php
                    $product=listprodefault();
                    foreach ($product as $value):

                    ?>
                        <div class="col-md-6 product-grid wow fadeInRight animated" data-wow-delay=".5s" style="margin-top:10px; ">
                        <div class="product-right">
                            <img src="admin/<?php echo  $value['img'];?>" class="img-responsive"  width="200" height="140" alt=""/>
                        </div>
                        <div class="product-left">
                            <h4>

                                <?php echo  $value['title'];?> </h4>
                            <p> <?php echo  $value['text'];?> </p>
                            <a href="gallery.html"><i class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></i></a>
                        </div>
                        <div class="clearfix">
                    </div>
                        </div>
                </div>


                        <?php
                        endforeach;
                        ?>
        <!---product control end-->



		<!---news control start--->
        <div style="margin-top:300px "></div>
		<div class="news-section">
			<div class="container">
				<h3><?php echo $settings['title_news'];?></h3>
               <?php
               $news=listnewsadmin();
               foreach ($news as $value):
               ?>
				<div class="news-grids wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="col-md-4 new-grid">
						<div id="box" class="burst-circle teal">
							<div class="caption"></div>
							<img src="admin/<?php echo  $value['img'];?>" />
							<h4><?php echo  $value['title'];?> </h4>
						</div>
					</div>
					<div class="col-md-8 new-grid1 hvr-bounce-to-left">
						<h5><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>  <?php echo  $value['date'];?> </h5>
						<h4> <?php echo  $value['title'];?></h4>
						<p> <?php echo  $value['text'];?></p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>

                <?php
                endforeach;
                ?>
			<!---news control end--->

		<!---Testimonials--->
		<div class="testimonials-section">
			<div class="container">
				<h3>گواهی نامه</h3>
				<div class="testimonials-grids">
					<div class="col-md-2 testimonials-grid1 wow fadeInLeft animated" data-wow-delay=".5s">
						<img src="images/t1.png" class="img-responsive" alt=""/>
					</div>
					<div class="col-md-10 testimonials-grid wow fadeInRight animated" data-wow-delay=".5s">
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
						<h5>ایمان مدائنی</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

	</div>
	<!---footer--->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<div class="footer-section">
			<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>درباره ما</h4>
					<ul>
						<li>
تمرکز بر مشتری</li>						
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>عملکردها</li>
						<li>نوآوری</li>
						<li>
مسئوليت ها</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
					<h4>راه حل ها</h4>
					<ul>
						<li>
مرکز تماس</li>
						<li>پشتیبانی مشتریان</li>
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>طرح‌نما </li>
						<li>
وب سلف سرویس</li>
						<li>معیارهای عملکرد</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
				<h4>کارها</h4>
					<ul>
						<li>
پشتیبانی مشتریان</li>
						<li>
پشتیبانی پلاتین</li>
						<li>پشتیبانی طلا</li>
						<li>آموزش</li>
						<li>کارگاه های آموزشی</li>
						<li>
آموزش آنلاین</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>تماس با ما</h4>
					<p>تهران-شریعتی</p>
					<p>خ ملک کوچه ایرانیاد</p>
					<p>تلفن رایگان: +1 900 448 9990</p>
					<p>
تلفن: +1 459 503 7035</p>
					<p>فکس: + 1 304 789 7898</p>
					<a href="mailto:example@mail.com"> example@mail.com</a>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!---footer--->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!--copy-->
	<div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"">
		<div class="container">
				<div class="social-icons">
					<a href="#"><i class="icon"></i></a>
					<a href="#"><i class="icon1"></i></a>
					<a href="#"><i class="icon2"></i></a>
					<a href="#"><i class="icon3"></i></a>
				</div>
			<p><?php echo $settings['copyright'];?> <a href="<?php echo $settings['url_programer'];?>"><?php echo $settings['programer'];?></a></p>
		</div>
	</div>
	<!--copy-->
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>
