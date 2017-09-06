<?php
/*	Example #1:

class Model
{
	//
}

class User extends Model
{
	public $createdAt = '2017-09-05 11:30:00';

	public function getCreatedAt()
	{
		return new DateTime($this->createdAt);
	}
}

class Comment extends Model
{
	public $createdAt = '2017-09-05 12:30:00';

	public function getCreatedAt()
	{
		return new DateTime($this->createdAt);
	}
}

$user = new User;

echo $user->getCreatedAt()->format('H:i'); // 11:30

$comment = new Comment;

echo $comment->getCreatedAt()->format('H:i'); // 12:30

*/

class Model
{
	protected $dates = [];

/*	Private properties can't accessable in sub classes or outside of Main class
	only accessable in Main class.
*/
	private $test = "test";

	// Protected properties in Main class can be accessed directly by Magic method
	public function __get($property)
	{
		if (in_array($property, $this->dates)) {
			return new DateTime($this->{$property});
		}

		return $this->{$property};
	}
}

class User extends Model
{
	// Protected properties in sub classes added to main class protected property
	protected $dates = ['createdAt'];

	protected $createdAt = '2017-09-05 10:30:00';
}

class Comment extends Model
{
	// Protected properties in sub classes added to main class protected property
	protected $dates = ['createdAt'];

	protected $createdAt = '2017-09-05 12:30:00';
}

$user = new User;

echo $user->createdAt->format('H:i');	// 10:30

$comment = new Comment;

echo $comment->createdAt->format('H:i');	// 12:30

// Private Property

$model = new Model;

$model->test = "new test";

echo $model->test;	// Fatal error: Cannot access private property Model::$test