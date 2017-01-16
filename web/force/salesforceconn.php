<?php
require_once('soapclient/SforceEnterpriseClient.php');
require_once('config.php');
class SalesforceConn {
	public $user = USERNAME;
	public $pass = PASSWORD;
	public $token = TOKEN;
	public $mySforceConnection;

	public function __construct(){
		 $this->mySforceConnection = new SforceEnterpriseClient();
		 //Change the path if the file calling this class is not located directly under web
		 $mySoapClient = $this->mySforceConnection->createConnection('force/soapclient/enterprise.wsdl.xml');
		 $mylogin = $this->mySforceConnection->login($this->user, $this->pass.$this->token);
	}
	public function query($query){
		return $this->mySforceConnection->query(($query));
	}
}
?>