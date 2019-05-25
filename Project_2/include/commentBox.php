        <div class="col-md-8 col-sm-102">
            <div class='panel panel-commentBox'>
            <h3>Comments:</h3>
            <?php if ($_SESSION['user']  != "Guest"): ?>  
                <form name="commentForm" action="#" method="post">
                    <textarea class="form-control input-lg" name=commentArea placeholder="Type your own comment here" cols=70 rows=5><?php 
                    if(isset($_POST['commentArea'])) 
                            {  
                                $comment = new Comment($_SESSION['user'], $ingredient, date("m/d/y") . " at " . date("h:i:sa"), $ingredid, filter_var($_POST ['commentArea'], FILTER_SANITIZE_STRING));
                                $db = new Database();
                                $db->addComment($comment);
                                $comment="";
                            }?></textarea><br>   
                    <input type="submit" value="Submit Comment">
                </form>
            <?php else: ?>    
            <?php endif; ?>

