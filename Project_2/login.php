<?php 
include "include/config.php";
include "./include/control.php";
include "./include/support.php";
$site_name="CT310 Project 2";
$page_name="Log in";
include "./include/header.php";
?>

<div class="center">
        <?php
            $users = readUsers(); 
            //print_r($users);
            //echo $_SESSION['admin'];
            if (isset ( $_POST ['username'] )) {
                $new = filter_var($_POST ['username'], FILTER_SANITIZE_STRING);
                $epw = filter_var($_POST ['magicWord'], FILTER_SANITIZE_STRING);
                $old = $_SESSION ['user'];
                if ($new != $old) {
                    if (password_verify($epw, userHashByName($users, $new))) {
                        $_SESSION ['loginTime'] = "".date("m/d/y") . " at " . date("h:i:sa");
                        $_SESSION ['user'] = $new;
                        if(isAdmin($users, $new))
                        {
                            $_SESSION ['admin'] = TRUE;
                        }
                        else
                        {
                           $_SESSION ['admin'] = FALSE; 
                        }
                        header ( "Location: ./index.php" );
                    }
                    else{
                         echo "<p style='color:red;'>Login failed. Please check your username and password</p>";
                    }
                }
            }
        ?>

        <p>Please Log in to proceed</p>
   	   	<form name="loginForm" action="#" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="magicWord" placeholder="Password"><br>
            <input type="submit" value="Submit" background-color: #FFFFC0;>
        </form>
		<!--<p><a href="./createUser.php">create account</a> &nbsp &nbsp &nbsp <a href="./forgotPasswordRequest.php">I forgot my password</a></p> */-->
        <a href="./forgotPasswordRequest.php">I forgot my password</a></p>
</div>

<?php 
include "./include/footer.php";
?>