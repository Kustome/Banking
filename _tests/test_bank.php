<?php
	require_once('_include/bank.php');
	
	class test_Bank extends Bank{
		public function test_getAccounts(){
			//expects an array response with AccountNumber and Owner
			$accounts = $this->getAccounts();
			if(is_array($accounts) && isset($accounts[0]['AccountNumber']) && isset($accounts[0]['Owner'])){
				return true;
			}else{
				return false;
			}
		}
		
		public function test_getSingleAccount($accountNumber = 0){
			//should expect back an array with AccountNumber and Owner
			if($accountNumber != 0){
				$account = $this->getSingleAccount($accountNumber);
				if($account['AccountNumber'] && $account['Owner']){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}


?>