<?php
include 'parent.php';
class Child extends ParentClass{
	$pub = strval(111);

	public function j($x){
		$this->h($x); 
	}
	public function add_2_public($add_text){
		self::$pub = self::$pub.$add_text;
		return self::$pub;
	}

}

?>