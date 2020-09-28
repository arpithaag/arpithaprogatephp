<!DOCTYPE html>
<html>
<head>
	<center>
	<title>Bulletin Board</title>
	<h1 align="center">The Bulletin Board</h1>
	<h3 align="center">Add an information</h3>
	<h5 align="right-top">Date:<?php echo date('d-M-y');?></h5>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <form action="add_infomation_success.php"method="post"><br></br>
      	<input type="text" name="subject"class="form-control"placeholder="subject"required><br></br>
      	<input type="text" name="link" placeholder="Link"><br></br>
      	<textarea name="description" col="40"row="40" placeholder="Description here"></textarea><br></br>
      	<input type="submit" name="submit" class="btn btn-info" value="Add">
      	<input type="reset" name="reset" class="btn btn-danger" value="Reset all fields">
      </form>
      <br>
      <a href="https://mindrainbows78.blogspot.com/" class="btn btn-success"target ="blank" >The link for today's class is</a>
  </br>
      </center>

</body>
</html>