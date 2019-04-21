<div id="nav">
        <ul>
            <li> <a href="index.php" class="active">Register </a>  </li>
            
            <?php
                if(isset($_SESSION['u_id']))
                {
                    echo '<form action="background/logout.php" method="POST">
                    <button type="submit" name="submit" value="submit">LOGOUT </button>
                    </form>';
                }
                else
                {
                    echo '<form action="background/login.php" method="post">
            
                    <input type="text" name="aaa" placeholder="Email or username">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="submit-login" value="submit"> Login  </button>
        
                    </form> ';
                }

            ?>
           
        
        </ul>
        

    </div>