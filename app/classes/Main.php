<?php

include 'DB.php';

/**
 * Description of Main
 *
 * @author dimab
 */
class Main {

    private $arrConf = array();
    private $title = '';

    private function setConf($arr) {
        $this->arrConf = $arr;
    }

    private function setTitle($str) {
        $this->title = $str;
    }

    public function Main() {
        //  go to db for config array
        $DB = DB::getInstance();
        $this->setConf($DB->getConfig());
        $this->setTitle($this->getConf()['title']);
    }

    public function getConf() {
        return $this->arrConf;
    }

    public function getTitle() {
        return $this->title;
    }

    /**
     * Run over config script concatenate all html's to one string and return  
     * @param type $strParam can be 'thumbs' or 'info'
     * @return string html or empty string
     */
    public function getHtml($strParam) {

        $strTmp = '';
        switch ($strParam) {
            case 'thumbs':
                // return thumbs html string 
                foreach ($this->arrConf['pageItems'] as $value) {
                    $strTmp .= $value['thumb'];
                }
                break;
            case 'info':
                // return thumbs info html string 
                foreach ($this->arrConf['pageItems'] as $value) {
                    $strTmp .= $value['info'];
                }
                break;

            default:
                break;
        }
        return $strTmp;
    }

}
