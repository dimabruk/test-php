<?php
include_once './classes/Main.php';
$main = new Main();
?>

<html>
    <head>
        <title><?php echo $main->getTitle(); ?></title>
        <!-- build:css css/vendor.css -->
        <!-- bower:css -->
        <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="bower_components/slick-carousel/slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:css css/style.css -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!-- endbuild -->
    </head>
    <body>
        <div class="slider-nav">
            <?php echo ($main->getHtml('thumbs')); ?>
        </div>
        <div class="slider-for">
            <?php echo ($main->getHtml('info')); ?>
        </div>
        <!-- build:js js/vendor.js -->
        <!-- bower:js -->
        <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="bower_components/slick-carousel/slick/slick.js" type="text/javascript"></script>
        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:js js/app.js -->
        <script src="js/app.js" type="text/javascript"></script>
        <!-- endbuild -->
    </body>
</html>