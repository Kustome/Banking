<?php
	require_once('_tests/test_bank.php');
	require_once('_tests/test_account.php');
	
	$bank = new test_Bank();
	$accounts = new test_Account();
	
	if($bank->test_getAccounts()){
		echo "Get Accounts Passed</br>";
	}else{
		echo "Get Accounts Failed</br>";
	}

	if($bank->test_getSingleAccount(12345678)){
		echo "Get Single Account Passed</br>";
	}else{
		echo "Get Single Account Failed</br>";
	}
	
	echo "Expecting Fail: ";
	if($bank->test_getSingleAccount(45678)){
		echo "Get Single Account Passed</br>";
	}else{
		echo "Get Single Account Failed</br>";
	}
	
	if($accounts->test_withdrawMoney('Individual', 450, 1000)){
		echo "Withdrawal of less than 500 on Individual Passed</br>";
	}else{
		echo "Withdrawal of less than 500 on Individual Failed</br>";
	}
	
	echo "Expecting Fail: ";
	if($accounts->test_withdrawMoney('Individual', 550, 1000)){
		echo "Withdrawal of less than 500 on Individual Passed</br>";
	}else{
		echo "Withdrawal of less than 500 on Individual Failed</br>";
	}
	
	if($accounts->test_depositMoney(150, 1000)){
		echo "Deposit Passed</br>";
	}else{
		echo "Deposit Failed</br>";
	}
	
	echo "Expecting Fail: ";
	if($accounts->test_depositMoney('abc', 1000)){
		echo "Deposit Passed</br>";
	}else{
		echo "Deposit Failed</br>";
	}
	
	if($accounts->test_transferMoney(150, 1000, 250)){
		echo "Transfer Passed</br>";
	}else{
		echo "Transfer Failed</br>";
	}
	
	echo "Expecting Fail: ";
	if($accounts->test_transferMoney(150, 100, 250)){
		echo "Transfer Passed</br>";
	}else{
		echo "Transfer Failed</br>";
	}
	
?>