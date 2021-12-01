<?php 
include('dbconnect.php');
include('file_logic.php');
?>

<html lang="en">
  <head>
    <!--<title></title>-->
   
    <!--<h1>Learners First Tutoring</h1>-->
    <link rel="stylesheet" href="uploadAssignments.css">
  </head>
  <body>
    <header>
      <h1>Learners First Tutoring</h1>
      <br>
      <a href= "teacher_dash.php" <h1>Learners First Online Platform</h1></a>
    </header>
    
    <div class="container">
      <div class="row">
        <form action="" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>