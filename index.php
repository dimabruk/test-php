<?php
$arrData = array('title' => 'title');
?>

<html>
    <head>
        <title>My Now Amazing Webpage</title>
        <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="bower_components/slick-carousel/slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="slider">
            <button type="button" data-role="none" class="prev" >Previous</button>
            <div class="draggable">
                <div class="cnt">
                    <ul>
                        <li>
                            <div class="slide">
                                <h3>1</h3>
                            </div>   
                        </li>
                        <li>
                            <div class="slide">
                                <h3>2</h3>
                            </div>   
                        </li>
                        <li>
                            <div class="slide">
                                <h3>3</h3>
                            </div>   
                        </li>
                        <li>
                            <div class="slide">
                                <h3>4</h3>
                            </div>   
                        </li>
                        <li>
                            <div class="slide">
                                <h3>5</h3>
                            </div>   
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>
        </div>

        <div class="slider-for">
            <div class="slick-list">
                <div class="slick-track" style="opacity: 1; width: 2800px;" role="listbox">
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide120">
                        <h3>1</h3>
                    </div>
                    <div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 560px; position: relative; left: -560px; top: 0px; z-index: 999; opacity: 1;" tabindex="-1" role="option" aria-describedby="slick-slide121">
                        <h3>2</h3>
                    </div>
                    <div class="slick-slide" data-slick-index="2" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: -1120px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide122">
                        <h3>3</h3>
                    </div>
                    <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: -1680px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide123">
                        <h3>4</h3>
                    </div>
                    <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: -2240px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide124">
                        <h3>5</h3>
                    </div>
                </div>
            </div>
        </div>

        <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>

    </body>
</html>