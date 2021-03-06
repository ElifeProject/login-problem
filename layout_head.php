<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Store Font" ; ?></title>
    <!--<title>E-Life</title>-->

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo $home_url . "style.css" ?>" />
    <!--<link rel="stylesheet" href="style.css" ? />-->

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><img src="img/logo.png" style="width: 100px;"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav font-cursive">
                                <ul>
                                    <!-- highlight if current page is cart.php-->
                                    <li <?php echo $page_title=="Index" ?" class='active'" : "" ;?>>
                                        <a href="<?php echo $home_url; ?>">Home</a>
                                    </li>
                                    <li><a href="#">Catalogue</a>
                                        <ul class="dropdown">
                                            <li><a href="E-Life_Computer_Accessories.php">Computer Peripherals</a></li>   
                                            <li><a href="Project_Accessories.php">Project Accessories</a></li>
                                            <li><a href="E-Life_Book_Store.php">Book Store</a></li>
                                            <li><a href="Stationary_Store.php">Stationary Store</a></li>
                                            <li><a href="E-Life_Grocery_Store.php">Grocery Store</a></li>           
                                            <li><a href="Men's_Fashion.php">Men's Fashion</a></li>
                                            <li><a href="Women's_Fashion.php">Women's Fashion</a></li> 
                                            <li><a href="E-Life_Special.php">E-Life Special</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true  && $_SESSION['access_level'] == 'Customer'){
                                    ?>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li <?php echo $page_title=="Edit Profile" ? "class='active'" : "";?>>
                                            <a href ="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                                                &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
                                                &nbsp;&nbsp;<span class="caret"></span>
                                            </a>
                                            <ul class ="dropdown-menu" role="menu">
                                                <li><a href="<?php echo $home_url; ?> logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <?php
                                    }
                                    //if user was logged in
                                    else{
                                    ?>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li <?php echo $page_title=="Login" ? "class='active'" : "";?>>
                                            <a href ="<?php echo $home_url; ?>login">
                                                <span class="glyphicon glyphicon-log-in"></span> Log in
                                            </a>
                                        </li>

                                        <li <?php echo $page_title=="SignUp" ? "class='active'" : "";?>>
                                            <a href ="<?php echo $home_url; ?>SignUp">
                                                <span class="glyphicon glyphicon-check"></span>SignUp
                                            </a>
                                        </li>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                    <!--<li><a href="SignUp.php">Sign Up</a></li>
                                    <li><a href="login.php">Log In</a></li>
                                    <li><a href="">Cart</a></li>-->
                                </ul>
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>
                    <!--if page title is login dont display the title -->
                    <?php
                     if($page_title!="Login"){
                        ?>
                    <div class='col-md-12'>
                        <div class="page-header">
                            <h1><?php echo isset($page_title) ? $page_title :"Hello World"; ?></h1>
                        </div>
                    </div>
                    <?php
                     }
                    ?>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->