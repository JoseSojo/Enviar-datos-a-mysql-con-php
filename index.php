<?php 
	/* 
	 * Welcomo to my code PHP
	 * Logical the form create account
	 *
	 * @Autor José Sojo <jsojo346@gmail.com>
	 *
	*/

	// Include archive the connection of database mysql
	include('db.php');

	/*
	 * Validate form
	*/
	if (isset($_POST['submit'])) {
		// Create variable param recive the form
		$user = $_POST['user'];
		$password = $_POST['password'];
		$r_password = $_POST['r-password'];
		// Validate of inputs have values
		if (!empty($user) && !empty($password) && !empty($r_password)) {
			// Validate of password and r-password is equal
			if ($password == $r_password) {
				/*
				 * request of database
				 * Method *Prepare*
				*/ 
				$query = $DB->prepare("INSERT INTO data VALUES(
					1,
					'$user',
					'$password'
				)");
				/*
				 * Ejexcute method prepare
				 * Assing values the *user* *password*
				*/ 
				$query->execute();
				// Massege success *Acounnd Create successting*
				$success = 'Subscription Successting!';
			} else{
				// Massege success *password not coincide*
				$danger = '<b>ERROR</b>: the password not coincidence';
			}
		} else{
			// Massege success *Complet all inputs*
			$danger = '<b>ERROR</b>: to owe complete all inputs';
		}
	}

	include('index.view.php');

 ?>