<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
      $user_id=$_SESSION['id'];
      $user_conformaton="SELECT `id`, `fname`, `mobileno`, `qty`, `time` FROM `sheduling` WHERE id =$user_id";
       $user_products_result=mysqli_query($con,$user_conformaton) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=100;
    //if($no_of_user_products==0){
        //echo "Add items to cart first.";
    //?>
       
   // <?php
   // }else{
       // while
         // echo "($row=mysqli_fetch_array($user_products_result))";
                      $sum=$sum * $row['qty']; 
       //}
   // }
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>club 35</title>
    
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
                <table class="table" border="2">
                    <tbody>
                        <tr>
                            <th>Item No</th>
                            <th> Name</th>
                            <th>time</th>
                            <th>No of players</th>
                         
                            <th>Status</th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                  
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><td><?php echo $row['fname']?></td><td><?php echo $row['time']?></td>
                            <td><?php echo $row['qty']?></td>
                            <td><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></td>
                        </tr>
                     <?php  }?>
                        <tr>
                            <th></th>
                            <th>Total price</th>
                            <th>Rs <?php echo $sum;?>/-</th>
                            <th><a href="success.php?id=<?php echo $user_id?>" 
                            >Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
