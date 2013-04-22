<?php

class Passwd_Task {

	// usage:
	// php artisan pwd userid password

    public function run($arguments)
    {
		$password = Hash::make($arguments[1]);

		$usr = User::where_id($arguments[0])->first();
		$usr->password = $password;
		$usr->save();

		echo "password of user ".$usr->first_name." ".$usr->last_name." changed.";
    }

}
