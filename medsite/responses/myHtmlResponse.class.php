<?php
/**
* @package   medsite
* @subpackage 
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/


require_once (JELIX_LIB_CORE_PATH.'response/jResponseHtml.class.php');

class myHtmlResponse extends jResponseHtml {

    public $bodyTpl = 'medsite~main';

    function __construct() {
        parent::__construct();
        global $gJConfig;
        $this->addCSSLink(jApp::config()->urlengine['jelixWWWPath'].'design/jelix.css');
        // Include your common CSS and JS files here
    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..

        //$this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
