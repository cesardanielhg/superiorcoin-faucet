<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>     
  
        <!-- TITLE OF SITE --> 
        <title>The SuperiorCoin Faucet</title>
  
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="The SuperiorCoin Faucet" />
        <meta name="keywords" content="coin, blockchain, superiorcoin, cryptocurrency, money, coins, win, free coin, faucet" />
        <meta name="developer" content="The SuperiorCoin Faucet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- FAV AND TOUCH ICONS   -->
        <link rel="icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/favicon-32x32.png.png">
        <link rel="apple-touch-icon" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="apple-touch-icon" sizes="32x32" href="images/favicon-32x32.png.png">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- POP UP IMAGE AND VIDEO -->
        <link rel="stylesheet" href="css/plagin-css/plagin.css">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="icons/rik-icons/styles.css">

        <!--   COUSTOM CSS link  -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- COLOR -->
        <link rel="stylesheet" href="css/colors/color-3.css" type="text/css" id="color-scheme" />
        <!-- <link rel="stylesheet" href="css/colors/color-2.css" type="text/css"/> -->
        <!-- <link rel="stylesheet" href="css/colors/color-3.css" type="text/css"/> -->

        <!--[if lt IE 9]>
                        <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->


        <!--   COUNTER BALANCE  -->

        <link rel='stylesheet' href='https://overpasstest-30e2.kxcdn.com/fonts.css'>
        <link rel="stylesheet" href="css/colors/numbers.css" type="text/css" />



        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>
    <body class="">


        
        <!-- Start: Navbar Area
        ============================= -->
        <header id="header" class="okayNav-header navbar-fixed-top main-navbar-top">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

                        <!-- TEMPLATE LOGO LIGHT -->
                        <a class="navbar-brand light-logo" href="index.html"><img src="images/SuperiorCoinLogoMenu.png" alt="" class="img-responsive"></a>

                    </div> <!-- End: .col-xs-3 -->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6">

                        <nav role="navigation" class="okayNav pull-right" id="js-navbar-menu">
                            <ul id="navbar-nav" class="navbar-nav">
                                <li><a class="btn-nav" href="#features">Features</a></li>
                                <li><a class="btn-nav" href="#user">User</a></li>
                                <li><a class="btn-nav" href="#contact">ContactUs</a></li>
                            </ul>
                        </nav>

                    </div> <!-- End: .col-xs-9 -->
                </div> <!-- End: .row -->
            </div> <!-- End: .container -->
        </header><!-- /header -->
        <!-- End: Navbar Area
        ============================= -->


        
       <!-- Start: Features Section 4
        ================================== -->
        <section class="features-section-4 section" id="subscribe">
            <div class="overlay-color-full">
                <div class="container">
                    <div class="row section-separator light-text">
                        
                        <!-- Start: Section Heading -->
                        <div class="section-header col-md-10 col-md-offset-1">
                            <img src="images/SuperiorCoinLogo300.png" alt="">
                            <h1 class="section-heading">Welcome to SuperiorCoin Faucet!</h1>
                            <p class="sub-title">Type your SuperiorCoin Wallet address in the folowing field and begin to win digital money.</p>
                        </div>
                        <!-- End: Section Heading -->


                        <!-- Start: Section Heading -->
                        <div class="section-header col-md-10 col-md-offset-1">
                            
                            <h3 class="section-heading">Win 1 SUP every 60 min!</h3>
                            <input type="hidden" id="set-time" value="60"/>

                                    
                            <div id="countdown">
                              <div id='tiles' class="color-full"></div>
                              <div class="countdown-label">Time Remaining</div>
                            </div>

                                    

                            <p class="sub-title">Stay in our website to win and claim more money.</p>
                        </div>
                        <!-- End: Section Heading -->



                        


                        <div class="part-1 col-sm-6 col-sm-offset-3 col-xs-12">
                            


                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">

                                    

                                    <!-- Mailchimp Subscriber Form Goes Here  -->
                                    <form id="mailchimp-subscribe" method="post" class="single-form text-center">
                                        <div class="container-fluid">




                                            <p class="subscription-success"></p>
                                            <p class="subscription-failed"></p>

                                            <div class="row">
                                                <div class="input-group">

                                                    <input type="email" id="address" name="email" placeholder="Enter your SuperiorCoin address" class="form-control">

                                                    <div class="input-group-btn">
                                                        <button class="btn btn-fill"onclick="SuperiorCoinGetAdressData()">Claim</button>
                                                    </div>

                                                </div>

                                                 <div class="g-recaptcha" data-sitekey="6LfTTkwUAAAAAHBfOOeWcxQQevK82luU1CVCceOv"></div>

                                            </div>
                                        </div>
                                    </form>



                                    
                                                                        
                                </div>
                            </div>
                        </div> <!-- End: .part-1 -->

                    </div> <!-- End: .row -->
                </div> <!-- End: .container -->
            </div> <!-- End: .overlay-color -->
        </section>
        <!-- End: Features Section 4
        ================================== -->






        



        <!-- Start: Section Separator
        ================================== -->
        <section class="Section-separator">
            <div class="container">

                <hr class="section-separator-line"> <!-- Separatior Two Section -->
                
            </div> <!-- End: .container -->
        </section>
        <!-- End: Section Separator
        ================================== -->

 



        <!-- BALANCE 3
        ================================== -->
        <section class="features-section-3 section bg-dark" id="describe">
            <div class="container">
                <div class="row ">
                    
                    <!-- Start: Section Heading -->
                        <div class="section-header">
                            <h2 class="section-heading gradient-text-full">SuperiorCoin Faucet Actual Balance</h2>
                        </div>
                        <!-- End: Section Heading -->
                       
                    <?php

                    require "../vendor/autoload.php";
                    use Superior\Wallet;
                    $wallet = new Superior\Wallet();

                    $address = $wallet->getAddress();
                    $balance = $wallet->getBalance();
                    
                    
                        //$balance = $this->getBalance();
                        $getfaucetbal = json_decode($balance);
                        $realBalance = number_format($getfaucetbal->{'balance'}/100000000);
                        $realBalance = number_format($realBalance, 2, '.', '');
                        //return $realBalance;
                    
                    
                    //print_r($realBalance);



                    ?>
                        
                
                    <div class="general_balance">
                        <h1 class="letter"><?php echo strval($realBalance); ?></h1>
                    </div>



                    
                   
                    <div class=" col-md-12  col-md-offset-1 section-separator">
                        <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
<div class="coinmarketcap-currency-widget col-md-8 col-md-offset-1" data-currencyid="2522" data-base="USD"  data-secondary="BTC"></div> 

                    </div>
                    
                    

                </div> <!-- End: .row -->

            </div> <!-- End: .container -->
        </section>
        <!-- End: BALANCE
        ================================== -->






        <!-- Start: Features Section 2
        ================================== -->
        <section class="features-section-2 section" id="how-it-works">
            <div class="overlay-color-full">
                <div class="container">
                    <div class="row section-separator light-text">
                        
                        <!-- Start: Section Heading -->
                        <div class="section-header col-md-10 col-md-offset-1">
                            <h2 class="section-heading">How it Works</h2>
                            <p class="sub-title">Follow these steps to start to win!</p>
                        </div>
                        <!-- End: Section Heading -->

                        <div class="part-1 col-xs-12">
                            <div class="row">
                                
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer">
                                        <i class="icon features-icon gradient-text-full icon-icon-id-2-alt"></i>
                                    </div>

                                    <h4 class="title m-t-30">Create your profile</h4>

                                </div>
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer">
                                        <i class="icon features-icon gradient-text-full icon-icon-cursor"></i>
                                    </div>

                                    <h4 class="title m-t-30">Type your Address</h4>

                                </div>
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer">
                                        <i class="icon features-icon gradient-text-full icon-icon-clock"></i>
                                    </div>

                                    <h4 class="title m-t-30">Wait to win more!</h4>

                                </div>
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer">
                                        <i class="icon features-icon gradient-text-full icon-icon-currency-alt"></i>
                                    </div>

                                    <h4 class="title m-t-30">Claim your SuperiorCoins!</h4>

                                </div>

                            </div> <!-- End: .row -->
                        </div> <!-- End: .part-1 -->

                    </div> <!-- End: .row -->
                </div> <!-- End: .container -->
            </div>
        </section>
        <!-- End: Features Section 2
        ================================== -->


        <style>
            #how-it-works{
                border-bottom: 1px dashed white;
            }
        </style>




        <!-- Start: Features Section 5
        ================================== -->
        <section class="features-section-5 testimonials-1 section" id="download">
            <div class="overlay-color-full">
                <div class="container">
                    <div class="row section-separator light-text">
                        
                        <!-- Start: Section Heading -->
                        <div class="section-header col-md-10 col-md-offset-1">
                            <h2 class="section-heading">Download the SuperiorCoin Wallet!</h2>
                            <p class="sub-title">Track your money.</p>
                        </div>
                        <!-- End: Section Heading -->

                        <div class="clearfix"></div>

                         <!-- Start: Download Button -->
                        <div class="btn-form btn-scroll text-center">  <!-- Button Area -->

                            <a href="#" class="btn btn-icon left-icon btn-fill">
                                <i class="icon icon-app-store"></i>
                                <span class="btn-text">Play Store</span>
                            </a> <!-- End: .androad -->
                            <a href="#" class="btn btn-icon left-icon btn-fill">
                                <i class="icon icon-google-play"></i>
                                <span class="btn-text">Play Store</span>
                            </a> <!-- End: .apple -->
                            <a href="#" class="btn btn-icon left-icon btn-fill">
                                <i class="icon icon-windows"></i>
                                <span class="btn-text">MS Store</span>
                            </a> <!-- End: .androad -->

                        </div>
                        <!-- End: Download Button -->

                        <div class="clearfix"></div>
                        
                        

                    </div> <!-- End: .row -->
                </div> <!-- End: .container -->
            </div> <!-- End: .overlay-color-full -->
        </section>
        <!-- End: Features Section 5
        ================================== -->




        <!-- Start: Footer Section 1
        ================================== -->
        <footer class="footer-section-1" id="footer">
            <div class="container">
                <div class="row section-separator">

                    <div class="each-item col-sm-5">
                        <div class="inner text-right">
                            
                            <p class="sub-title">Any question?</p>
                            <a href="#" data-toggle="modal" data-target="#contact-form">
                                <h5 class="title">Contact us now!</h5>
                            </a>

                        </div>
                    </div>
                    <div class="each-item col-sm-2">
                        <div class="inner text-center">
                            
                            <a href="index.html" class="logo-link">
                                <img src="images/SuperiorCoinLogo.png" alt="" class="img-responsive logo">
                            </a>

                          

                        </div>
                    </div>
                    <div class="each-item col-sm-5">
                        <div class="inner text-left">
                            
                            <p class="sub-title">Follow us on</p>
                            <ul class="nav social-icon">
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-pinterest"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                </div><!-- End: .section-separator  -->
            </div> <!-- End: .container  -->
        </footer>
        <!-- End: Footer Section 1
        ================================== -->




        
        <!-- SCRIPTS 
        ========================================-->
        <script src="js/plagin-js/jquery-1.11.3.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/plagin-js/plagin.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>

        <!-- Custom Script 
        ==========================================-->
        <script src="js/custom-scripts.js"></script>
       

    </body>

</html>