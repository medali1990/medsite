<?php
/**
* @package   medsite
* @subpackage medsite
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('html');
        $rep->title='Forum ';
        $nom="med";
        $tpl=new jTpl();
        $tpl->assign('nom',$nom);



        return $rep;
    }

    function listenews(){
        $rep=$this->getResponse('html');
        $tpl =new jTpl();
        $fact=jDao::get('medsite~news');
        $liste=$fact->findAll();
        $tpl->assign('liste',$liste);
        $rep->body->assign('MAIN',$tpl->fetch('listenews'));
        return $rep;

    }
    function createform(){
        $rep=$this->getResponse('html');
        //$sujet=$this->param('sujet');
        //$text=$this->param('texte');
        $tpl=new jTpl();

        $rep->body->assign('MAIN',$tpl->fetch('newsform'));
        return $rep;
    }

    function createsave(){
        $news=jDao::createRecord('medsite~news');
        $news->sujet=$this->param('sujet');
        $news->texte=$this->param('texte');
        $news->news_date=$this->param('date');
        $dao=jDao::get('medsite~news');
        $dao->insert($news);

        $rep=$this->getResponse('redirect');
        $rep->action='medsite~default:index';
        return $rep;
    }
}
