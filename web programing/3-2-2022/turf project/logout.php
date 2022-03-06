<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
           
            <footer class="footer">
                <center>
                    <p>club 35 venture
                    All Rights Reserved.</p>
       
               </center>
            
           </footer>
        </div>
    </body>
</html>
