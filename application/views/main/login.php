<!DOCTYPE html>
<html class="no-js before-run" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>McDorm</title>

    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/site.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/flag-icon-css/flag-icon.css">


    <!-- Page -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pages/login.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="page-login layout-full">

    <!-- Page -->
    <div class="page animsition vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="<?php echo base_url(); ?>assets/images/logo.png">
            </div>
            <form method="post" action="loginvalidation">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block"><b>Masuk</b></button>
            </form>

            <footer class="page-copyright">
                <p>Site by Malang Digital Core</p>
                <p>© 2017. All RIGHT RESERVED.</p>
            </footer>
        </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/animsition/jquery.animsition.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/asscroll/jquery-asScroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url(); ?>assets/vendor/switchery/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/slidepanel/jquery-slidePanel.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/core.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/site.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/sections/menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sections/menubar.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sections/sidebar.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/configs/config-colors.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/configs/config-tour.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/components/asscrollable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/components/animsition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/components/slidepanel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/components/switchery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/components/jquery-placeholder.js"></script>

    <script>
        (function (document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function () {
                Site.run();
            });
        })(document, window, jQuery);
    </script>

</body>

</html>