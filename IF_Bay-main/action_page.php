<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
	if (isset($_POST['user']) || isset($_POST['password'])){
		echo '';
	} else {
  
  
	echo '<p> name = ' .$_POST['user'].'</p>';
	echo '<p> password = ' .$_POST['password'].'</p>';
	}
  ?>
	<script src="index.js"></script>
  </body>
</html>