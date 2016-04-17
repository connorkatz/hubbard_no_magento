<doctype html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" type="text/css" href="css/application.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/jQuery/noconflict.js"></script>
        <script src="../js/hoverintent/jquery.hoverIntent.min.js"></script>
        <script src="../js/debounce/jquery.ba-throttle-debounce.min.js"></script>
        <script src="../js/scroll_lock/jquery.scrollLock.simple.js"></script>
        <script src="../js/simple_modal/simple_modal.js"></script>
        <script src="../js/bxSlider/jquery.bxslider.min.js"></script>
        <script src="../js/base.js"></script>
    </head>

    <body>

    <div id="site_container">

        <section id="site_callout">
            <div id="site_callout_inner">
                <p>
                    <a href="/returns">Free Shipping &amp; Returns</a>
                </p>
                <p>
                    <span><a href="/support">Customer Service: 844.482.4800</a></span>
                </p>
            </div><!-- end site callout inner -->
        </section><!-- end site callout -->
        <header id="site_header">
            <div id="site_header_inner">
                <section id="mobile_nav_toggle">
                    <a href="#">
                        <span></span>
                        <label>Menu</label>
                    </a>
                </section><!-- end mobile nav toggle -->
                <section id="logo_container">
                    <a href="/">
                        <div id="logo">
                            <img src="../images/samuel_hubbard_logo.svg" alt="Samuel Hubbard">
                        </div>
                        <p>Shoemakers Since 1930</p>
                    </a>
                </section><!-- end logo container -->
                <section id="header_right">
                    <section id="user_nav">
                        <ul>
                            <li id="search_link" class="link"><a href="#"><i class="fa fa-search"></i><span>Search</span></a></li>
                            <li id="sign_in_link" class="link"><a href="/customer_login.php">Sign In</a></li>
                            <li id="support_link" class="link"><a href="#">Support</a></li>
                            <li id="cart_link"><a href="/cart.php" id="cart_icon" class="has_items"><span>1</span></a></li>
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
                <div id="search_bar_inner">
                    <input type="text" placeholder="Product Name or Part #">
                    <button type="submit"><i class="fa fa-chevron-circle-right"></i></button>
                </div><!-- end search bar inner -->
            </div><!-- end search bar -->
            <section id="search_util_links">
                <div id="search_util_links_inner">
                    <span>Quick Links:</span>
                    <ul>
                        <li><a href="#">Find a Store</a></li>
                        <li><a href="#">Hubbard Free</a></li>
                        <li><a href="#">Un-Sneaker</a></li>
                        <li><a href="#">Women's</a></li>
                    </ul>
                </div><!-- end search util links inner -->
            </section><!-- end search util links -->
        </section><!-- end site search -->
        <nav id="mobile_nav">
            <ul id="mobile_nav_items">
                <?php include 'nav_items.php'; ?>
            </ul>
        </nav>

        <div id="site_content_container">
