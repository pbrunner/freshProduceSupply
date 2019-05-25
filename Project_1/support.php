<?php

require_once "./assets/passwordLib.php";

class User {
	public $username = '';
	public $passwordHash = '';
}

function makeNew($user, $pass){
	$u = new User();
	$u->username = $user;
	$u->passwordHash = $pass;
}
function setupDefault(){
	$users = array();
	$cnt = 0;
	$users[$cnt++] = makeNew('tanner', '$2a$10$JfDUweabBMrd7Xa0.Y8DMOwvx8s7vrkE5ovl.6cvXyj.T5kj8dM5m');
	$users[$cnt++] = makeNew('peter', '$2a$10$JzttGiww9QaMF85FTdwuUO4jtC3MOGS/K/Nf8VpYYgdts1UXEQGxu');
	$users[$cnt++] = makeNew('ct310', '$2a$10$7wAjgrBW106tynPaRYiAAOlTipA2K44f4A6Nk8rxK0qDK0vJKCexW');
	write($users);
}

function write($s){
	$file = fopen('secret.csv', 'w+') or die ("Can't open csv. Deaded.");
	fputcsv($file, array_keys(get_object_vars($s[0])));
	foreach($s as $u)
		fputcsv($file, get_object_vars($u));
	fclose($file);
}

function read(){
	if(!file_exists('secret.csv'))
		setupDefault();
	
	$users = array();
	$file = fopen('secret.csv', 'r') or die ("Can't open csv. Deaded.");
	$keys = fgetcsv($file);
	while(($vals = fgetcsv($file)) != FALSE) {
		if(count($vals) > 1) {
			$u = new User();
			for($k = 0; $k < count ( $vals ); $k ++) {
				$u->$keys [$k] = $vals [$k];
			}
			$users [] = $u;
		}
	}
	fclose ( $fh );
	return $users;
}
