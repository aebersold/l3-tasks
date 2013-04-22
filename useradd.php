<?php

class Useradd_Task 
{
	// usage:
	// php artisan addusr email@adress.ch password name

    public function run($arguments)
    {
		$password = Hash::make($arguments[1]);

		User::create(array('email' => $arguments[0], 'password' => $password, 'name' => $arguments[2]));

		echo "User ".$arguments[2]." (".$arguments[0].") created.";
    }

}