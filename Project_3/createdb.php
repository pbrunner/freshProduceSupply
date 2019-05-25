<?php

if(!file_exists("groceries.db"))
{
	header( 'Location: ./index.php' ) ;
}

try {
	$dbh = new PDO("sqlite:./groceries.db");
	echo 'Connection successful.';
	$sql = "CREATE TABLE ingredients (
            ingredient_id INTEGER PRIMARY KEY ASC,
            ingredient_name varchar(50),
			image_filename varchar(50),
			image_attribution varchar(255),
			description varchar(255),
			unit varchar(50),
			cost varchar(50),
			short varchar(50),
			tim varchar(50))";
	$status = $dbh->exec($sql);
	if($status === FALSE){
		print_r($dbh->errorInfo());
		
	}else{
		echo "Done.";
	}

	$sql = "CREATE TABLE comments(
			   comment_id INTEGER PRIMARY KEY ASC, 
			   ingredient_id int(5), 
			   ingredient varchar(255),
			   username varchar(255), 
			   datePosted varchar(10),
			   content varchar(255),
			   FOREIGN KEY (ingredient_id) REFERENCES ingredients(ingredient_id))";
	$status = $dbh->exec($sql);
	if($status === FALSE){
		print_r($dbh->errorInfo());
	}else{
		echo "Done.";
	}

	$sql = "CREATE TABLE users(
				user_id INTEGER PRIMARY KEY ASC,
			   username varchar(255), 
			   admin varchar(5),
			   email varchar(255), 
			   hash varchar(255))";
	$status = $dbh->exec($sql);
	if($status === FALSE){
		print_r($dbh->errorInfo());
		
	}else{
		echo "Done.";
	}
} catch (PDOException $e) {
	/* If you get here it is mostly a permissions issue
	 * or that your path to the database is wrong
	 */
	echo 'Connection failed: ' . $e->getMessage();
	die;
}
loadIngredientsIntoEmptyDatabase();

header( 'Location: ./index.php' ) ;

function loadIngredientsIntoEmptyDatabase() {
	global $dbh;
	require "source_file/list.php";
	//$comments = getCommentsFromFile();
	$ingredients= getIngredientsFromFile();
	$users= getUsersFromFile();
	$ingredients_ids = array (); // Stores ingredients and SQL index
	$sql_ingredient = "INSERT INTO ingredients (ingredient_name, image_filename, image_attribution, description, unit, cost, short, tim) VALUES (:ingredient_name, :image_filename, :image_attribution, :description, :unit, :cost, :short, :tim)";
	//$sql_comment = "INSERT INTO comments (ingredient_id, ingredient, username, datePosted, content) VALUES (:ingredient_id, :ingredient, :username, :datePosted, :content)";
	$sql_users = "INSERT INTO users (username, admin, email, hash) VAlUES (:username, :admin, :email, :hash)";
	// This allows caching of statements and optimized queries
	$ingredient_stm = $dbh->prepare ( $sql_ingredient );
	//$comment_stm = $dbh->prepare ( $sql_comment );
	$users_stm = $dbh->prepare ($sql_users);
	foreach ($ingredients as $current_ingred)
	{
		if (!key_exists ( $current_ingred ['name'], $ingredients_ids )) {
			testedInsertIngredientName ( $current_ingred, $ingredient_stm );
			$ingredient_id = $dbh->lastInsertId ( 'ingredient_id' );
			$ingredients_ids [$current_ingred ['name']] = $ingredient_id;
		} else {;}
	}

	/*foreach ( $comments as $current_comment ) {
		testedInsertComment ( $current_comment, $comment_stm );
	}*/

	foreach($users as $current_user)
	{
		testedInsertUser($current_user, $users_stm);
	}

	
}

function testedInsertIngredientName($ingredient, $stmt) {
	global $dbh;
	//print_r($ingredient);
	if (! $stmt->execute ( array (
		':ingredient_name'  => $ingredient['name'],
		':image_filename' => $ingredient['filename'],
		':image_attribution' => $ingredient['attrib'],
		':description' => $ingredient['description'],
		':unit' => $ingredient['unit'],
		':cost' => $ingredient['cost'],
		':short' => $ingredient['short'],
		':tim' => $ingredient['tim'],
	) )) {
		echo '<pre class="bg-danger">';
		print_r ( $dbh->errorInfo () );
		echo '</pre>';
	}
}
function testedInsertComment($comment, $stmt) {
	global $dbh;
	if (! $stmt->execute ( array (
			':ingredient_id' => $comment ['ingredient_id'],
			':ingredient'=> $comment ['ingredient'],
			':username' => $comment ['username'],
			':datePosted' => $comment ['datePosted'],
			':content' => $comment ['content'], 
	) )) {
		echo '<pre class="bg-danger">';
		print_r ( $dbh->errorInfo () );
		echo '</pre>';
	}
}

function testedInsertUser($user, $users_stm) {
	global $dbh;
	if (! $users_stm->execute ( array (
			':username' => $user['username'],
			':admin' => $user['admin'],
			':email' => $user['email'], 
			':hash' => $user['hash'],
	) )) {
		echo '<pre class="bg-danger">';
		print_r ( $dbh->errorInfo () );
		echo '</pre>';
	}
}
