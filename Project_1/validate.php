<?php
require_once "assets/passwordLib.php";

Class Usered{
	Public $userid = 'name';
	Public $password = 'hash';
}

function makeU($uid, $h){
	$u = new Usered();
	$u->userid = $uid;
	$u->password = $h;
	return $u;
}

function makeDefault(){
	$users = Array();
	$i = 0;
	$users[$i++] = makeU("tanner", '$2a$10$E/iPnRp3aHavizfgd0Yn5uLzpuk1gOOPWRCSFMyLA/NPsgHXr8nzi');
	$users[$i++] = makeU("peter", '$2a$10$n/TsNEzWl66t4cqJobDXz.YbcJ0DzDpzXTFlPPBmKzH.Ay1xd0znW');
	$users[$i++] = makeU("ct310", '$2a$10$7wAjgrBW106tynPaRYiAAOlTipA2K44f4A6Nk8rxK0qDK0vJKCexW');
	return $users;
}

function findUser($list, $uid) {
	$res = '';
	foreach ( $list as $u ) {
		if ($u->userid == $uid) {
			$res = $u->password;
		}
	}
	return $res;
}


           

?>
