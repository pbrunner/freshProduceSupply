<?php
require_once ("comment.php");
require_once ("ingredient.php");
class Database extends PDO {
	public function __construct() {
		parent::__construct ( "sqlite:" . __DIR__ . "/../groceries.db" );
	}

	/** 
	 * Functions used by the select page to sort full music database 
	 */
	function getCommentsByID($id) {
		$sql = "SELECT comment_id, ingredient_id, username, datePosted, content
		        FROM comments WHERE ingredient_id LIKE '%$id%'";
		$result = $this->query ( $sql );
		if ($result === FALSE) {
			// Only doing this for class. Would never do this in real life
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
			return array ();
		}
		$comments = array ();
		foreach ( $result as $row ) {
			$comments [] = Comment::getCommentFromRow ( $row );
		}
		return $comments;
	}

	function AddComment($comment) 
	{
		$db = new Database();
		$sql_comment = "INSERT INTO comments (ingredient_id, ingredient, username, datePosted, content) VALUES (:ingredient_id, :ingredient, :username, :datePosted, :content)";
		$comment_stm = $db->prepare ( $sql_comment );
		if (! $comment_stm->execute ( array (
			':ingredient_id' => $comment->ingredient_id,
			':ingredient'=> $comment->ingredient,
			':username' => $comment->username,
			':datePosted' => $comment->datePosted,
			':content' => $comment->content, 
	) )){
			echo '<pre class="bg-danger">';
			print_r ( $db->errorInfo () );
			echo '</pre>';
		}	
	}

	function getIngredient($query_term) {
		$query_term = SQLite3::escapeString ( $query_term );
		$sql = "SELECT ingredient_id, ingredient_name, image_filename, image_attribution, description, unit, cost, short, tim FROM ingredients
					WHERE (ingredient_name LIKE '%$query_term%')"; 
		$result = $this->query ( $sql );
		if ($result === FALSE) {
			echo $sql;
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
			return array ();
		}
		$comments="";
		foreach ( $result as $row ) {
			$comments= Ingredient::getIngredientFromRow ( $row );
		}
		return $comments;
	}
	
	

	function AddIngredient($ingredient) 
	{
		$db = new Database();
		$sql_ingredient = "INSERT INTO ingredients (ingredient_name, image_filename, image_attribution, description, unit, cost, short, tim) VALUES (:ingredient_name, :image_filename, :image_attribution, :description, :unit, :cost, :short, :tim)";
		$ingredient_stm = $db->prepare ( $sql_ingredient );
		if (! $ingredient_stm->execute ( array (
			':ingredient_name' => $ingredient->name,
			':image_filename' => $ingredient->imgname,
			':image_attribution' => $ingredient->imgattrib,
			':description' => $ingredient->description,
			':unit' => $ingredient->unit,
			':cost' => $ingredient->cost,
			':short' => $ingredient->short,
			':tim' => $ingredient->tim,
	) )){
			echo '<pre class="bg-danger">';
			print_r ( $db->errorInfo () );
			echo '</pre>';
		}	
	}

	function getLastIngredientID() {
		$sql = "SELECT ingredient_id FROM ingredients;";
		$result = $this->query ( $sql );
		$count = 0;
		if ($result === FALSE) {
			echo $sql;
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
			return array ();
		}
		foreach ( $result as $row ) {
			$count++;
		}
		return $count;
	}
	
	function checkFileName($newFileName) {
		$sql = "SELECT image_filename FROM ingredients"; 
		$result = $this->query ( $sql );
		if ($result === FALSE) {
			echo $sql;
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
			return array ();
		}
		$same = false;
		foreach ( $result as $existingFileName ) {
                        if(strcmp($existingFileName['image_filename'], $newFileName) == 0){
                          $same = true;
                        }
		}
		return $same;
	}

	function getAllIngredientNames() {
		$sql = "SELECT ingredient_name FROM ingredients"; 
		$result = $this->query ( $sql );
		if ($result === FALSE) {
			echo $sql;
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
			return array ();
		}
		$names="";
		foreach ( $result as $row ) {
			$names[] = $row['ingredient_name'];
		}
		return $names;
	}

	function getUsers() {
		$sql = "SELECT username, admin, email, hash FROM users"; 
		$result = $this->query ( $sql );
		if ($result === FALSE) {
			echo $sql;
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
			return array ();
		}
		$users = Array();
		foreach ($result as $row)
		{
			$users[] = Array(
					"username"=>$row['username'],
					"admin"=>$row['admin'],
					"email"=>$row['email'],
					"hash"=>$row['hash']
					 );
		}
		return $users;
	}
}
