<!DOCTYPE html>
<html lang="en-ca">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="/assets/frontend/mycss.css" type="text/css"> -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>Home Page</title>
    <meta name="description" content="A range of the high end luxury furniture.">
    <meta name="keywords" content="luxury , high, end, designer, furniture">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Designed by OPW LAB Los Angeles-->
    <!-- styles -->

    <link href="/assets/frontend/assets/styles/main.css" rel="stylesheet" type="text/css" media="all">

    <link href="/assets/frontend/assets/styles/responsiveslides.css" rel="stylesheet" type="text/css" media="screen">

    <link href="/assets/frontend/assets/styles/fancybox.css" rel="stylesheet" type="text/css" media="screen">

    <link href="/assets/frontend/assets/styles/css.css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css" media="all">



    <!-- scripts -->

    <script type="text/javascript" src="/assets/frontend/assets/scripts/jquery-1.9.1.min.js"></script>

    <script type="text/javascript" src="<?= base_url('/assets/frontend/assets/scripts/jquery.dotdotdot.min.js') ?>"></script>

    <script type="text/javascript" src="/assets/frontend/assets/scripts/responsiveslides.min.js"></script>

    <script type="text/javascript" src="/assets/frontend/assets/scripts/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="/assets/frontend/assets/scripts/main.js"></script>

    <script type="text/javascript" src="/assets/frontend/assets/scripts/validation.js"></script>

    <script type="text/javascript" src="/assets/frontend/assets/scripts/gt_functions.js"></script>

    <script type="text/javascript" src="/assets/frontend/assets/scripts/jquery.unveil.js"></script>

    <script type="text/javascript" src="/assets/frontend/assets/scripts/gt_main.js"></script>

    <!-- styles -->

    <link href="/assets/frontend/assets/styles/main.css" rel="stylesheet" type="text/css" media="all">
    <link href="/assets/frontend/assets/styles/main.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/assets/frontend/assets/styles/fancybox.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/assets/frontend/assets/styles/css.css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css" media="all">

    <style type="text/css">
        body {
            background-color: #000000;
        }
    </style>
    <meta name="theme-color" content="#ffffff">
    <div id="header-wrapper">
        <div class="logo-wrapper"> <a href="/"> <img src="/assets/frontend/images/logo.png" width="568" height="35" alt=""> </a>
        </div>
        <div class="menu-wrapper">
            <div id="mobnav-btn">Menu</div>
            <ul class="sf-menu">
                <li> <a class="" title="About Us" href="/about-us">ABOUT US</a> <span onclick="" class="#"></span>
                    <ul>
                    </ul>
                </li>
                <?php foreach ($menu as $m) : ?>
                    <li> <a class="" title="<?= $m['parent_category'] ?>"><?= $m['parent_category'] ?></a> <span onclick="" class="mobile-dropdown-trigger js-mobile-dropdown-trigger"></span>
                        <ul>
                            <?php foreach ($sub_menu as $sm) : ?>
                                <?php if ($sm['id_categories'] == $m['id_categories']) : ?>
                                    <li> <a class="" title="Coffee Tables" href="/product?<?= 'category=' . urlencode($m['parent_category']) . '&sub=' . urlencode($sm['sub_category']) . '&parent=' . urlencode(base64_encode($sm['id_categories'])) . '&id=' . urlencode(base64_encode($sm['id'])) ?>"><?= $sm['sub_category'] ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
                <li> <a class="" title="Contact" href="/register">Register</a> <span onclick="" class="mobile-dropdown-trigger js-mobile-dropdown-trigger"></span>
                    <ul>
                    </ul>
                </li>
                <li> <a class="" title="Contact" href="/contact-us">CONTACT US</a> <span onclick="" class="mobile-dropdown-trigger js-mobile-dropdown-trigger"></span>
                    <ul>
                    </ul>
                </li>
                <li> <a class="" title="Log In" href="/login">LOG IN</a> <span onclick="" class="mobile-dropdown-trigger js-mobile-dropdown-trigger"></span>
                    <ul>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</head>

<body id="home">
    <main>
        <div id="main-wrapper">
            <!--header-wrapper-end-->


            <div id="content-wrapper homepage-wrapper">



                <!--slides_container-end-->
                <!--slides_container-end-->
                <p></p>
                <?= $this->renderSection('content'); ?>
                <!-- Use whatever tags are appropriate for content. -->
                <footer>
                    <div>
                        <meta name="description" content="A spectacular range of luxury designer furniture and International furniture collections.">

                        <meta name="keywords" content="luxury , high, end, designer, art, furniture">

                        <meta name="viewport" content="width=device-width, initial-scale=1.0">

                        <link rel="canonical" href="https://www.companyx.com/home">



                        <!-- styles -->

                        <link href="/assets/frontend/assets/styles/main.css" rel="stylesheet" type="text/css" media="all">

                        <link href="/assets/frontend/assets/styles/main.css" rel="stylesheet" type="text/css" media="screen">

                        <link href="/assets/frontend/assets/styles/fancybox.css" rel="stylesheet" type="text/css" media="screen">

                        <link href="/assets/frontend/assets/styles/css.css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css" media="all">

                        <style type="text/css">
                            body {
                                background-color: #000000;
                            }
                        </style>
                        <meta name="theme-color" content="#ffffff">

                        <meta charset="UTF-8">



                        <body style="background-image: url('linked-images/main_bg-2.jpg');">
                            <div id="main-wrapper">

                                <div id="header-wrapper">
                                    <div class="menu-wrapper">

                                        <div id="mobnav-btn"></div>
                                        © 2021 - Company X- All rights reserved.
                                    </div>

                                </div>
                            </div>
                        </body>

                    </div>
                </footer>
            </div>
        </div>
    </main>
</body>

</html>
<!-- Use whatever tags are appropriate for content. -->