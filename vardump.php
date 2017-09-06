<?php

class User
{
	public $username = "Shaik";

	public function fullName()
	{
		return "Shaik Rasool";
	}

	public function avatar($size = 24)
	{
		return $size;
	}
}

$user = new User();

var_dump($user); // object(User)#1 (1) { ["username"]=> string(5) "Shaik" }

var_dump($user->username); // string(5) "Shaik"

var_dump($user->fullName()); // string(12) "Shaik Rasool"