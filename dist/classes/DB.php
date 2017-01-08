<?php

/**
 * connection to DB use singleton 
 *
 * @author dimab
 */
class DB {

    private static $instance;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    private function DB() {
        // connect to DB , etc
    }

    public function getConfig() {
        // do some query to db and return array of html's

        $arr = array(
            'title' => 'Some page title',
            'pageItems' => array(
                array(
                    'thumb' => '<div>
                <img src="img/1.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/1.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/2.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/2.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/3.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/3.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/4.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/4.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/5.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/5.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/6.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/6.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/7.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/7.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/8.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/8.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
                array(
                    'thumb' => '<div>
                <img src="img/9.jpg" alt="Duncan Meyers Manager of Research" width="150" height="150">
                <p>Duncan Meyers,</p>
            </div>',
                    'info' => '<div>
                <div class="entry-content">
                    <h1>Juan Phillips </h1>
                    <img src="img/9.jpg" alt="">
                    <h2>Administrative Assistant of Practice and Research</h2>
                    <p>Juan Phillips is responsible for providing day-to-day support to the vice presidents of Programs/Practice and Research and their staff. She also coordinates and helps to plan internal and external meetings and conferences.</p>
                </div>
            </div>'
                ),
               
            )
        );

        return $arr;
    }

}
