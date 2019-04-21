<?php
include 'header.php';
include 'nav.php';

include_once 'background/includes.php';
?>
    <div class="sidebar">
        <h1> Register </h1>
        <form action="background/sign.php" method="post">
            <input type="text" name="first" placeholder="First name"><br><br>
            <input type="text" name="last" placeholder="Last name"><br><br>
            <input type="text" name="user" placeholder="User name"><br><br>
            <input type="email" name="Email" placeholder="Email"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit" name="submit-signup" value="submit"> Register </button>

        </form>
       
       

    </div>
    <div class="sidebar">
        <h3> Next fixture </h3>
        <img src="match.jpg" alt="match">
        
       

    </div>
    
    

    <div class="section">
    
           
    </div>
   
            


    
   
    
   
    
 <?php
    include 'footer.php';
 ?>