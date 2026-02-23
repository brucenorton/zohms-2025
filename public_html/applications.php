<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zero Ohm Systems</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="css/zohm.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include('nav.php'); ?>

  <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/mall900.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Shopping Malls</h2>
                </div>
            </div>
			   <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/amusement_park900.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Amusement Parks</h2>
                </div>
            </div>
			  <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/beachclub.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Beach Clubs</h2>
                </div>
            </div>
			       <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/stadium900.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Stadiums</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/hotel.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Hotels</h2>
                </div>
            </div>
            <div class="item ">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/cinema900.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Cinemas</h2>
                </div>
            </div>
            <div class="item ">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/warehouse1600.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Warehouses</h2>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-md-12">&nbsp;
          </div>
        </div>

        <div class="row">
            <div class="col-md-5"> 
                <img src="images/2021/zohms_toolbox.jpg" class="img-responsive" alt="">
                
            </div>
            <div class="col-md-7">
                <br>
                <h3>Perfect solution for professional audio installations in:</h3>
            
                <p>Shopping malls, hotels, airports, amusement parks, stadiums, cinemas,  reception halls, cruise ships, outdoor malls, hospitals, restaurants,  warehouses, universities, water parks, bars and more.</p>

             </div>

        </div>
        <!-- /.row -->


        <hr>
        <section class="row">
            <div class="col-md-12 text-center">
                <h3>Contact Zero-Ohm</h3>
                <p class="lead"><a href="info@zohms.com?subject=Zero Ohm Mail">info@zohms.com</a> </p>
                <address>
                    Zero-Ohm Systems<br>
                    2300 Boulevard Alfred-Nobel<br>
                    Montreal, Quebec Canada<br>
                    H4S-2A4<br>
                    <a href="tel:5149562525#4428">514 956 2525 ext. 4428</a>
                </address>
            </div>
        </section>



        <!-- Footer -->
        <footer id="contact">
          <div class="row">
            <hr>
            <div class="col-sm-4" id="social-footer">
              <a href="https://www.linkedin.com/company/zero-ohm-systems/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
              <a href="https://www.facebook.com/ZeroOhmSystems/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </div>
            
            <div class="col-sm-4 text-center">
              
              <p>Copyright &copy; Zero-Ohm</p>
            </div>
            <div class="col-sm-4">
              <img src="images/Logo_ZeroOhm.png" class="pull-right" alt="">
            </div>
          </div>
        <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
