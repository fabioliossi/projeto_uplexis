<?php

class Application_Model_Request
{
	public function getDataSintegraByCnpj($cnpj)
	{

		$uri = "http://www.sintegra.es.gov.br/resultado.php" ;

		$postfields = array(
						'num_cnpj' => $cnpj , 
						'num_ie' => '' 
					) ;

		$config = array(
        	'adapter'   => 'Zend_Http_Client_Adapter_Curl',
        	'curloptions' => array(
        							CURLOPT_POST =>1 ,
        							CURLOPT_POSTFIELDS => $postfields ,
        							CURLOPT_RETURNTRANSFER => 1
        						),
    	);

		$client = new Zend_Http_Client($uri , $config);

		print  $client->request();

	

		
	}


}

