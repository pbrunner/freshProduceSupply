<?php 
include "./include/config.php";
include "./include/control.php";
include "./include/support.php";
$site_name="CT310 Project 2";
$page_name="Password reset";
include "./include/header.php";
?>

<div class="center">

    <?php
            $users = readUsers(); 
            function generateRandomString($length = 32) {
                return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
            } //source: http://stackoverflow.com/a/13212994

            if(isset($_GET['key']) && isset($_SESSION['key']) && $_GET['key'] == $_SESSION['key'])
            {
                 echo '<p>Enter your new password</p>
                    <form action="#" name="passwordReset" method="post">
			        <input type="password" name="magicword" placeholder="New Password" />
                    <input type="submit" value="Reset Password"/>	
                    </form>';                    
            }
            else{
                echo '<p>Enter your username, and a password reset link will be sent to the email address on file</p>
                    <form action="#" name="recoveryEmail" method="post">
			        <input type="text" name="username" placeholder="Username" />
                    <input type="submit" value="Send Email"/>	
                    </form>';
            }         

            if (isset ( $_POST ['username'] )) 
            {
                $new = filter_var($_POST ['username'], FILTER_SANITIZE_STRING);
                $old = $_SESSION ['user'];
                if ($new != $old && isUser($users, $new)) 
                {
                    if(userHashByName($users, $new) != '')
                    {
                        $_SESSION['key'] =  generateRandomString();
                        $_SESSION['userToReset'] = $new;
                        $url = "http://www.cs.colostate.edu/".$config->base_url."/forgotPasswordRequest.php?key=".$_SESSION['key'];

                        $content = "Fresh Produce Supply Password Reset:\r\n";
                        $content .= "Your password reset link:\n\t".$url;
                        $content .="\nThank you,\n\t Fresh Produce Supply Team";
                        //echo $headers;
                        $addressees = userEmailByName($users, $_POST ['username']);
                        if(mail($addressees, "Your Fresh Produce Supply Password Reset", $content))
                        {
                            echo "<p>Recovery email sent. Redirecting to login page.";
                            header('refresh: 5; url=./login.php');
                        }
                        else{;}
                    }
                }
                else
                {
                    echo"<p>No user found</p>";
                }
            }

            if(isset($_POST['magicword']))
            {
                $user="";
                $epw = filter_var($_POST ['magicword'], FILTER_SANITIZE_STRING);
                foreach ( $users as $u ) {
                    if ($u->username == $_SESSION['userToReset']) {
                        $user=$u;
                        $epw = password_hash($epw);
                    }
                }
                
                if(updateUser ( $user, $epw ))
                {
                    echo '<p> Password has been reset. Redirecting to login page.</p>';
                    header('refresh: 5; url=./login.php');
                }
                else
                {
                    echo "<p>Reset failed, contact developer</p>";
                }
                
                unset($_SESSION['key']);
                unset( $_SESSION['userToReset']);
            }
    ?>
</div>

<?php 
include "./include/footer.php";
?>
