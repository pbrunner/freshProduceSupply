<?php
require_once("ingredient.php");

class Comment{
	public $username;
	public $datePosted;
	public $content;
	public $ingredient;
	public $ingredient_id;
	
	function __construct($name="",$ingred="",$datePosted="",$id=0,$content=""){
		$this->username = $name;
		$this->ingredient = $ingred;
		$this->datePosted = $datePosted;
		$this->ingredient_id = $id;
		$this->content = $content;
	}

	public static function getCommentFromRow($row){
		$comment = new Comment();
		$comment->username = $row['username'];
		$comment->datePosted = $row['datePosted'];
		$comment->content = $row['content'];
		$comment->ingredient_id = $row['ingredient_id'];
		return $comment;
	}
	
	function __toString(){
		return $this->content ."<br>". '<small>(' . $this->username .", ". $this->datePosted . ')</small>';
	}
}
