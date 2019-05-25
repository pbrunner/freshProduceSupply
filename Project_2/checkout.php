<?php 
include "include/config.php";
include "./include/control.php";
$site_name="CT310 Project 2";
$page_name="Checkout";
if(empty($_SESSION['cart']))
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //from http://stackoverflow.com/a/5285044
    die;
}
include "./include/support.php";
include "./include/header.php";?>

<div class='checkout panel'>
<form class="form-group form-group-lg" name="fullCart" action="?submit=true" method="post">
<h3>Cart:</h3>
    <table class='table'>
    <tr>
        <th>Ingredient</th>
        <th>Quantity</th>
    </tr>
        <?php foreach($_SESSION['cart'] as $formIngredient => $formQuantity)
        {
            echo '<tr>';
            echo '<td>'.$formIngredient.'</td>';
            echo '<td><input class="form-group-sm quant" type="number" name='.$formIngredient.' value= '.$formQuantity.'>'.'</td>';
            echo '</tr>';
        }?>
    </table>
    <input type="submit" value="Update Order" name="update" background-color: #FFFFC0;>
    &nbsp
    <input type="submit" value="Submit Order" name= "checkout" background-color: #FFFFC0;>
</form>
</div>

<?php
if(isset($_POST['update']))
{
    $newQ = 0;
    foreach($_SESSION['cart'] as $ingredient => $quantity)
    {
        
            echo $_POST[$ingredient];
            $newQ = filter_var($_POST [$ingredient], FILTER_VALIDATE_INT);
            $_SESSION['cart'][$ingredient] = $newQ;
            header('Location: '.$_SERVER['PHP_SELF']);
    }
}

if(isset($_POST['checkout']))
{
        $users = readUsers(); 
        $admins = readAdmins();
        $order = "Fresh Produce Supply Order:\r\n";
        foreach($_SESSION['cart'] as $ingredient => $quantity)
        {
            $order .= "\t".$quantity." x ".$ingredient."\n";
        }
        $order .="\nThank you,\n\t Fresh Produce Supply Team";
        $headers = 'Bcc: ';
        foreach($admins as $adminUser)
        {
            if(isset($adminUser->email))
            {
                    $email = userEmailByName($users, $adminUser->username);
                    if($email != '')
                    {
                        $headers .= $email . ", " ;
                    }
            }
        }
        $headers = $headers . "\r\n";
        echo $headers;
        $addressees = userEmailByName($users, $_SESSION['user']);
        if(mail($addressees, "Your Fresh Produce Supply Order", $order, $headers))
        {
            Header('Location: ./checkedOut.php');
        }
        else{;}
}
include "./include/footer.php";
?>
