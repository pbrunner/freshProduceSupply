 <?php if ($_SESSION['user']  != "Guest"): //show the add to cart button?> 
    <br>
        <form name="addToCartForm" class="form-group-sm" action="#" method="post">
            <input class="form-control input-sm quant" type="number" name="quantity" placeholder="Quantity Desired">
            <?php if(isset($_SESSION['cart'][$ingredient]))
            {
                echo "<small>".$_SESSION['cart'][$ingredient]." ".$ingredient." already in cart</small>";
                echo '<br><input type="submit" value="Add to Cart" background-color: #FFFFC0;>';
            }
            else
            {
                echo '<input type="submit" value="Add to Cart" background-color: #FFFFC0;>';
            }?>
            
        </form>
<?php else: ?>    
<?php endif; ?>

<?php
    $quantity = 0;
    if(isset($_POST['quantity'])) 
    {  
        $quantity = filter_var($_POST ['quantity'], FILTER_VALIDATE_INT);
        if(isset($_SESSION['cart'][$ingredient]))
        {
            $newQ = $quantity + $_SESSION['cart'][$ingredient];
            $_SESSION['cart'][$ingredient] = $newQ;
            echo "<p style='color:green'><small> $quantity $ingredient added to cart for $newQ total</small></p>";
        }
        else
        {
            $_SESSION['cart'][$ingredient] = $quantity;
            echo "<p style='color:green'><small> $quantity $ingredient added to cart </small></p>";
        }
        
    }
    else{;}
?>



