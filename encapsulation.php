<?php

/* Example #1: Not Filtering Email Address

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

$user->email = 'weetrrtttyy';

echo $user->email; // weetrrtttyy

die();

$user->setEmail('HELLO@SRODroid.com');

// var_dump($user); // object(User)#1 (1) { ["email"]=> string(18) "hello@srodroid.com" }

echo $user->getEmail(); // hello@srodroid.com

*/

/* Example #2: Using Protected

class User
{
	protected $email;

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

$user->email = 'weetrrtttyy';

echo $user->email; // Fatal error: Cannot access protected property User::$email

die();

$user->setEmail('HELLO@SRODroid.com');

// var_dump($user); // object(User)#1 (1) { ["email"]=> string(18) "hello@srodroid.com" }

echo $user->getEmail(); // hello@srodroid.com

*/

/* Example #3: can't directly  access the protected property.

class User
{
	protected $email;

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

echo $user->email; // hello@srodroid.com

*/

//	Example #4:

class Validator
{
	protected $errors = [];

	public function validate($data, $rules)
	{
		// validation code ..

		$this->errors[] = 'The email is required'; // By Commenting this line we get "There's no error."
	}

	public function fails()
	{
		return !empty($this->errors);
	}

	public function getErrors()
	{
		return $this->errors;
	}
}

$validator = new Validator;
$validator->validate([], ['required']);

if ($validator->fails()) {
	die('There\'s an error.');
} else {
	echo "There\'s no errors";
}
