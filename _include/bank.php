<?php
	class Bank{
		function __construct(){
			$this->Name = 'Wild Wild West Banking';
			//This is not where I would want to instantiate this data either. This is just for demo purposes. 
			$this->Accounts = array(
				array(
					'AccountNumber' => 12345678,
					'Owner' => 'Billy the Kid',
					'CheckingNumber' => 123,
					'CheckingBalance' => 500,
					'InvestmentAccounts' => array('Individual' => array('number' => 123, 'balance' => 1000), 'Corporate' => array('number' => 123, 'balance' => 15000))
				),
				array(
					'AccountNumber' => 23456789,
					'Owner' => 'Will Smith',
					'CheckingNumber' => 234,
					'CheckingBalance' => 50,
					'InvestmentAccounts' => array('Individual' => array('number' => 234, 'balance' => 100), 'Corporate' => array('number' => 234, 'balance' => 150))
				)
			
			);
		}
		
		public function getAccounts(){
			//this pulls all accounts available in this bank 
			return $this->Accounts;
		}
		
		public function getSingleAccount($accountNumber){
			//return a single account that matches the number passed 
			if(!empty($accountNumber) || is_int($accountNumber)){
				foreach($this->Accounts AS $account){
					if($account['AccountNumber'] == $accountNumber){
						return $account;
					}
				}
			}else{
				return false;
			}
		}
		
	}



?>