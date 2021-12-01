<?php include('dbconnect.php')?>
<html>
    <body>
        <center>
            <h1>Learners First Login</h1>
            <form method="post" action="dashboard.php">
                <label>Enter User ID:</label>
                <input type="text" name="user_ID" placeholder="eg. LFS/LFA"><br><br>
                <label>Enter Password</label>
                <input type="password" name="user_password"><br><br>
                <input type="submit" name="user_submit" value="Login"><br><br>
                <input type="submit" name="admin" value="Admin Login">
            </form>
        </center>    
    </body>
</html>