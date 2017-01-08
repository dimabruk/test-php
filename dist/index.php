<?php
include_once './classes/Main.php';
$main = new Main();
?> <html><head><title><?php echo $main->getTitle(); ?></title><link rel="stylesheet" href="css/vendor.css"><link rel="stylesheet" href="css/style.css"></head><body><div class="slider-nav"> <?php echo ($main->getHtml('thumbs')); ?> </div><div class="slider-for"> <?php echo ($main->getHtml('info')); ?> </div><script src="js/vendor.js"></script><script src="js/app.js"></script></body></html>