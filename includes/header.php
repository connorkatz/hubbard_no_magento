<doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/resets.css">
    <link rel="stylesheet" type="text/css" href="css/base_style.css">
    <link rel="stylesheet" type="text/css" href="css/style_375_up.css">
    <link rel="stylesheet" type="text/css" href="css/style_400_up.css">
    <link rel="stylesheet" type="text/css" href="css/style_700_up.css">
    <link rel="stylesheet" type="text/css" href="css/style_1050_up.css">
    <link rel="stylesheet" type="text/css" href="css/style_1500_up.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery_noconflict.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/base.js"></script>
    <script src="js/responsive.js"></script>
</head>

<body>

<div id="site_container">

    <section id="site_callout">
        <div id="site_callout_inner" class="site_width">
            <p>
                <a href="/returns">Free Shipping &amp; Returns</a>
            </p>
            <p>
                <span><a href="/support">Customer Service: 844.482.4800</a></span>
            </p>
        </div><!-- end site callout inner -->
    </section><!-- end site callout -->
    <header id="site_header">
        <div id="site_header_inner" class="site_width">
            <section id="mobile_nav_toggle">
                <a href="#">
                    <span></span>
                    <label>Menu</label>
                </a>
            </section><!-- end mobile nav toggle -->
            <section id="logo_container">
                <a href="#">
                    <div id="logo">
                        <img src="images/samuel_hubbard_logo.svg" alt="Samuel Hubbard">
                    </div>
                    <p>Shoemakers since 1930</p>
                </a>
            </section><!-- end logo container -->
            <section id="header_right">
                <section id="user_nav">
                    <ul>
                        <li id="search_icon"><a class="fa fa-search"></a></li>
                        <li class="link"><a href="#">Sign In</a></li>
                        <li class="link support"><a href="#">Support</a></li>
                        <li class="cart_link"><a href="#" id="cart_icon"><span>2</span></a></li>
                    </ul>
                </section><!-- end user nav -->
                <nav id="main_nav">
                    <ul id="main_nav_items">
                        <?php include 'nav_items.php'; ?>
                    </ul>
                </nav><!-- end main nav -->
            </section><!-- end header right -->
        </div><!-- end site header inner -->
    </header><!-- end site header -->
    <section id="site_search">
        <div id="search_bar">
            <input type="text" placeholder="Product Name or Part #">
            <button type="button"><i class="fa fa-chevron-circle-right"></i></button>
        </div><!-- end search bar -->
    </section><!-- end site search -->
    <nav id="mobile_nav">
        <ul>
            <?php include 'nav_items.php'; ?>
        </ul>
    </nav>