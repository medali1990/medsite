<?php 

/**
* 
*/
class adminCtrl extends jControllerDaoCrud
{
	protected $dao='medsite~news';
	protected $form='medsite~newsform';

	protected function _getResponse(){
		$rep=$this->getResponse('html');
		$rep->title="gestion des news";
		return $rep;
	}
	
}

?>