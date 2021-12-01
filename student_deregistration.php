<?php
include ('dbconnect.php');
?>

<a href= "teacher_dash.php" <h1>Learners First Online Platform</h1></a>

<br>
<main>
    <form method="POST" id="deregister-user-form" action="deregister_user.php">
        <h3>De-Register Student</h3>
        <br>
        <h3>Search for student to de-register via name.</h3>
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
        <button type="submit" class="btn" id = "btn" name="addBTN"> Submit</button>
    </form>
</main>
