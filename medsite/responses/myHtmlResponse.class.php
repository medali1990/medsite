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
        $config = jApp::config();
        $baseDirectory = $config->urlengine['basePath'];
        $this->addCSSLink($baseDirectory."bootstrap/css/bootstrap.css");
        $this->addCSSLink($baseDirectory."bootstrap/css/bootstrap.min.css");
        $this->addCSSLink($baseDirectory."bootstrap/css/agency.css");
        //var_dump($baseDirectory);


        $this->addCSSLink($baseDirectory."bootstrap/font-awesome/css/font-awesome.css");
        $this->addCSSLink($baseDirectory."bootstrap/js/jquery.js");
        //$this->addCSSLink($baseDirectory."");
        //$this->addCSSLink($baseDirectory."");
        //$this->addCSSLink($baseDirectory."");
        //$this->addCSSLink($baseDirectory."");
        //$this->addCSSLink($baseDirectory."");
        //$this->addCSSLink($baseDirectory."");
        //$this->addCSSLink($baseDirectory."");

        $this->addJsLink($baseDirectory."bootstrap/js/agency.js");
        $this->addJsLink($baseDirectory."bootstrap/js/bootstrap.js");
        $this->addJsLink($baseDirectory."bootstrap/js/bootstrap.min.js");
        $this->addJsLink($baseDirectory."bootstrap/js/cbpAnimatedHeader.js");
        $this->addJsLink($baseDirectory."bootstrap/js/classie.js");
        $this->addJsLink($baseDirectory."bootstrap/js/contact_me.js");
        $this->addJsLink($baseDirectory."bootstrap/js/jqBootstrapValidation.js");
        $this->addJsLink($baseDirectory."bootstrap/js/jquery.js");
       //$this->addJsLink($baseDirectory."");

        //$this->addCSSLink(jApp::config()->urlengine['jelixWWWPath'].'design/jelix.css');
        //$this->addCSSLink($theme.'css/screen.css');
        // Include your common CSS and JS files here
    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..

        //$this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
