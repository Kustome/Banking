<?php

	require_once('_include/accounts.php');
	
	class test_Account extends Account{
	
		public function test_withdrawMoney($accountType, $withdrawalAmount, $accountBalance){
			//expecting a balance amount back 
			$newAccountBalance = $this->withdrawMoney('Individual', $withdrawalAmount, $accountBalance);
			if($newAccountBalance != $accountBalance){
				return true;
			}else{
				return false;
			}
		}
		
		public function test_depositMoney($depositAmount, $accountBalance){
			//expecting a balance amount back 
			$newAccountBalance = $this->depositMoney($depositAmount, $accountBalance);
			if($newAccountBalance != $accountBalance){
				return true;
			}else{
				return false;
			}
		}
		
		public function test_transferMoney($transferAmount, $transferAccountBalance, $targetAccountBalance){
			//expecting a balance amount back 
			$newAccountBalance = $this->transferMoney($transferAmount, $transferAccountBalance, $targetAccountBalance);
			if($newAccountBalance != $targetAccountBalance){
				return true;
			}else{
				return false;
			}
		}
		
	}