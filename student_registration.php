<?php 
include('dbconnect.php')
?>

<a href= "teacher_dash.php" <h1>Learners First Online Platform</h1></a>
<br>
<main>
    <form method="POST" id="new-user-form" action="register_user.php">
        <h1>New Student</h1>
        <br>
        <label for="fname">First Name</label>
        <br>
        <input id="fname" type="text" name="f_name" class="input" placeholder="John"/> 
        <br>
        <br> 
        <label for="lname">Last Name</label> 
        <br>
        <input id="lname" type="text" name="l_name" class="input" placeholder="Smith"/> 
        <br>
        <br>
        <label for="ID">Contact Number</label> 
        <br>
        <input id="number" type="text" name="contactnum" class="input" placeholder="eg. 2687328484"/>
        <br>
        <br>
        <label for="password">Password</label> 
        <br>
        <input id="password" type="password" name="user_password" class="input" placeholder="eg. 'LFSsmith_4848'"/> 
        <br>
        <br>
        <label for="password">Contact E-mail</label>
        <br>
        <input id="email" type="text" name="student_email" class="input" placeholder="eg. johnsmith@gmail.com"/>
        <br>
        <br>
        <button type="submit" class="btn" id = "btn" name="addBTN"> Submit</button>
    </form>
</main>

</body>
</html>