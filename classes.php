<?php

/* Example #1:

class User
{
	public $username = "Shaik";

}

$user = new User();

echo $user->username; // Shaik

*/

/* Example #2:

class User
{
	public function fullName()
	{
		return "Shaik Rasool";
	}
}

$user = new User();

echo $user->fullName(); // Shaik Rasool

*/

// Example #3:

class User
{
	public function avatar($size = 24)
	{
		return $size;
	}
}

$user = new User();

echo $user->avatar(); // 24

// Overriding size value

echo $user->avatar(23); // 23