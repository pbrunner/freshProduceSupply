<?php
include_once 'control.php';
include_once 'validate.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="ingredients.css">
        <title>CT310 Ingredients Login</title>
    </head>
    <body>
		
		<div id="container">
		<div id="body">
		<div id="header">
        <?php
        include_once 'header.php';
        makeHeader("Login");
        $users = makeDefault();
        ?>
		</div>
        <?php include_once 'navigation.php'; ?>
        <div class="container-fluid">
            <div class="row visible-on">

                <div class="col-md-5 col-lg-5">

                </div>
                <div class="col-md-2 col-lg-2">
                    <div class="vertical-center">
						<div class="loginControl">
                        <form method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="userid" placeholder="Username">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <div class="submitBox" style="padding-top: 1em;">
								<input type="submit" name="login" value="Login">
                                <input type="submit" name="logout" value="Logout" style="float: right;">
                                </div>
                             </div>
                        </form>
                        <div class="response">
							<?php if (isset($_POST['login'])) {
								if (isset($_POST['userid']) && isset($_POST['password'])) {
								$new = strip_tags($_POST ['userid']);
								$epw = strip_tags($_POST ['password']);
								$old = $_SESSION ['userid'];
								$_POST['userid'] = filter_var($_POST['userid'], FILTER_SANITIZE_STRING);
								if ($new != $old) {
									?><div id="success"><?php
									if (password_verify($epw, findUser($users, $new))) {
										$_SESSION ['startTime'] = time ();
										$_SESSION ['userid'] = $new;
										echo "User: " . $_POST['userid'] . " sucessfully logged in on " 
											. date("l F jS, Y - g:i:sa", time());
										}else{
											echo '<div id="failure">Bad login.</div>';
										}
									}
								}
								}
								if(isset($_POST['logout'])){
									if($_SESSION['userid'] != "Guest"){
									echo '<div id="LOSuccess">Log out success!</div>';
									$_SESSION['userid'] = "Guest";
									//~ session_unset();
									//~ session_destroy();
								}
								}
								?>
						</div>
						</div>
                    </div>
                </div>

            </div>
        </div>
        
       </div>

        <?php
        include_once 'footer.php';
        ?>
        </div>
    </body>
</html>
