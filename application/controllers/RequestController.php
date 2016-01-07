<?php

class RequestController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {
        
    	$cnpj = "31804115000243";  	

    	$request = new Application_Model_Request();

    	$request->getDataSintegraByCnpj($cnpj) ;

        return ;
    }


}