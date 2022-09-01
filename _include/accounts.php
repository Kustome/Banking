<?php
	
	class Account{
		function __construct(){
			$this->investmentAccounts = array ('Individual' => array('withdrawal_max_amount' => 500), 'Corporate' => array('withdrawal_max_amount' => 5000));
		}
	
		public function withdrawMoney($accountType = 'Individual', $withdrawalAmount = 0, $accountBalance){
			if(is_float($withdrawalAmount) || is_int($withdrawalAmount) && !empty($accountBalance)){
				$accountDetails = $this->getInvestmentAccountDetails($accountType);
				if($withdrawalAmount < $accountDetails['withdrawal_max_amount']){
					return $accountBalance - $withdrawalAmount;
				}else{
					return $accountBalance;
				}
			}
		}
		
		public function depositMoney($depositAmount = 0, $accountBalance=0){
			if(is_float($depositAmount) || is_int($depositAmount) && !empty($accountBalance) && $depositAmount > 0){
				return $accountBalance + $depositAmount;
			}else{
				return $accountBalance;
			}
		}
		
		public function transferMoney($transferAmount = 0, $transferAccountBalance=0, $targetAccountBalance=0){
			if(is_float($transferAmount) || is_int($transferAmount) && $transferAmount > 0 && ($transferAccountBalance - $transferAmount) > 0){
				return $targetAccountBalance + $transferAmount;
			}else{
				return $targetAccountBalance;
			}
		}
		
		public function getInvestmentAccountDetails($accountType){
			if(is_string($accountType)){
				return $this->investmentAccounts[$accountType];
			}else{
				return array();
			}
		}
	}
	
	
?>