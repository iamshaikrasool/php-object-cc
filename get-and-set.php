<?php

/* Example #1:

class User
{
	public $email;
}

$user = new User();

$user->email = 'hello@shaikrasool.net';

var_dump($user->email); // string(21) "hello@shaikrasool.net"

*/

/* Example #2:

class User
{
	public $email;

	public function setEmail($email)
	{
		var_dump($this); // object(User)#1 (1) { ["email"]=> NULL }
	}

	public function getEmail()
	{
		//
	}
}

$user = new User();

$user->setEmail('hello@srodroid.com');

*/

// Example #3:

class User
{
	public $email;

	public function setEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return;
		}

		$this->email = $email;
	}

	public function getEmail()
	{
		return strtolower($this->email);
	}
}

$user = new User();

$user->setEmail('HELLO@SRODroid.com');

// var_dump($user); // object(User)#1 (1) { ["email"]=> string(18) "hello@srodroid.com" }

echo $user->getEmail(); // hello@srodroid.com