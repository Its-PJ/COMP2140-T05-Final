<?php 
include('file_logic.php');
include('dbconnect.php');
?>
<html>
<head>
  <meta charset="utf-8" />
  <title>Learners First Tutoring</title>
  <link rel="stylesheet" href="uploadAssignments.css">
</head>
<style>
    *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }
</style>
<header>
<h1>Download Assignments</h1>
<a href= "teacher_dash.php" <h1>Learners First Online Platform</h1></a>
</header>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>
