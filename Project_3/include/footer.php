
        <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
            <div class="currentInfo"><small>Current User: <?php echo $_SESSION['user'] ?></small>, 
            <?php if(isset($_SESSION['loginTime'])) {
                echo "<small>Logged in since " . $_SESSION['loginTime'] . "</small>";
            }
            if($_SESSION['user'] == "Guest") {
                echo "<br><small>Please login to gain full access to our site!</small>";
            }
            ?></div>
             <footer class="footer">
                This site is part of a CSU <a href = "https://www.cs.colostate.edu/~ct310/yr2017sp/"><strong>CT 310</strong></a> Course Project. &copy; Copyright 2017, Elise Ritschard & Peter Brunner&nbsp  
            </footer>
        </nav>
    </body>
</html>
