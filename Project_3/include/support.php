<?php

require_once "./assets/passwordLib.php";
require_once "./assets/database.php";

class User {
	public $user_id = 0;
	public $username = 'JohnDoe'; /* Username */
	public $email = 'none@.com'; /* Users last name */
	public $hash = ''; /* Hash of password */
	public $admin = FALSE;
}
function makeNewUser($id = 0, $username, $email, $admin, $hash) {
	$u = new User ();
	$u->user_id=$id;
	$u->username= $username;
	$u->email = $email;
	$u->hash = $hash;
	$u->admin = $admin;
	return $u;
}
/*function setupDefaultUsers() {
	$users = array ();
	$i = 0;
	$users [$i ++] = makeNewUser ( 'mjhehn', 'mjhehn@gmail.com', TRUE, '$2a$06$ty/sYm1nyI8XGidtwCH6/.e82nO0sQ3LBy4W/CgM3phLU9IzaAQJq' );
	$users [$i ++] = makeNewUser ( 'ct310', 'n/a', TRUE,  '$2a$06$TFCe6ihjqcJ.zCYV/fuya.7HEm0MYKMuk5s7fLaz7ip2QPukfOtNO' );
	$users [$i ++] = makeNewUser ( 'customerTest', 'mjhehn@rams.colostate.edu', FALSE,  '$2y$10$a75fA3fMkU2Qk36Xum9ta.qazsRowA0Mru3XX/ukfRxv63VnbGlrq' );
	writeUsers ( $users );
}*/
function updateUser($user, $newHash) {
	$sql_users = "INSERT INTO users (username, admin, email, hash) VAlUES (:username, :admin, :email, :hash)";
	$sql_delete = "DELETE FROM users WHERE user_id=$user->user_id";
	$db = new Database();
	$users_stm = $db->prepare ($sql_users);

	if ($db->exec ( $sql_delete ) === FALSE) {
			return FALSE;
		}


	if (! $users_stm->execute ( array (
			':username' => $user->username,
			':admin' => $user->admin,
			':email' => $user->email, 
			':hash' => $newHash,
	) )) {
		return FALSE;
	}
	return true;
}
function readUsers() {
/*	if (! file_exists ( 'users.csv' )) {
		setupDefaultUsers ();
	}*/
	$db = new Database();
	$users = $db->getUsers();

	$sql = "SELECT user_id, username, admin, email, hash FROM users"; 
	$result = $db->query ( $sql );
	if ($result === FALSE) {
		return array ();
	}
	$users = Array();
	foreach ($result as $row)
	{
		$users[] = makeNewUser($row['user_id'], $row['username'],$row['email'],$row['admin'],$row['hash']);
	}
	return $users;
}
function userHashByName($users, $username) {
	$res = '';
	foreach ( $users as $u ) {
		if ($u->username == $username) {
			$res = $u->hash;
		}
	}
	return $res;
}

function isAdmin($users, $username)
{
	$res = FALSE;
	foreach ( $users as $u ) {
		if ($u->username == $username) {
			if($u->admin)
			{
				$res = TRUE;
			}
		}
	}
	return $res;
}

function isUser($users, $username)
{
		$res = FALSE;
	foreach ( $users as $u ) {
		if ($u->username == $username) {
			$res = true;
		}
	}
	return $res;
}

function userEmailByName($users, $username) {
	$res = '';
	foreach ( $users as $u ) {
		if ($u->username == $username) {
			$res = $u->email;
		}
	}
	return $res;
}

function readAdmins() {
/*	if (! file_exists ( 'users.csv' )) {
		setupDefaultUsers ();
	}*/
	$db = new Database();
	$users = $db->getUsers();

	$sql = "SELECT user_id, username, admin, email, hash FROM users WHERE admin = 1"; 
	$result = $db->query ( $sql );
	if ($result === FALSE) {
		return array ();
	}
	$users = Array();
	foreach ($result as $row)
	{
		$users[] = makeNewUser($row['user_id'], $row['username'],$row['email'],$row['admin'],$row['hash']);
	}
	return $users;
}
?>