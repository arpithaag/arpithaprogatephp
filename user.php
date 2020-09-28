<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<section class="my-6">
	<div class="py-2"></div>
	     <h2 class="text-center">My Class</h2>
	</div>

	<div class="continer-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
		                <div class="card" style="width: 400px" >
 <img class="card-img-top" src="images/t1.jpg" alt="Card image">
            <div class="card-body">
    <h4 class="card-title">Physics</h4>
    <p class="card-text">View the classroom.</p>
    <a href="teacher.php" class="btn btn-success">Add info to the bulletin board</a>
                      </div>
                 </div>
			</div>
		</div>
	</div>
		
	<div class="col-lg-4 col-md-4 col-12">
		    <div class="card" style="width:400px">
 <img class="card-img-top" src="images/t2.jpg" alt="Card image">
            <div class="card-body">
    <h4 class="card-title">Chemistry</h4>
    <p class="card-text">View the classroom.</p>
    <a href="teacher.php" class="btn btn-success">See Profile</a>
                     
                 </div>
			</div>
		</div>
			
		<div class="col-lg-4 col-md-4 col-12">
  <div class= "card" style="width:400px">
 <img class="card-img-top" src="images/t3.jpg" alt="Card image">
            <div class="card-body">
    <h4 class="card-title">Biology</h4>
    <p class="card-text">View the classroom.</p>
    <a href="teacher.php" class="btn btn-success">See Profile</a>
                 
             </div>
		</div>
	</div>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<section class="my-2">
	<div class="py-2"></div>
	     <h2 class="text-center">Get in touch with your teacher</h2></div>
  <div class="w-50 m-auto" >
  	<form action="student.php" method="post">
  		<div class="form-group">
  			<label>Your Name</label>
  			<input type="text" name="user" autocomplete="off"class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Your Email-id</label>
  			<input type="Email-id" name="Email-id" autocomplete="off"class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Mobile Number</label>
  			<input type="text" name="mobile" autocomplete="off"class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Subject</label>
  			
  			<textarea class="form-control" name="subject"></textarea>
  		</div>

  		<div class="form-group">
  			<label>Your doubts regarding the subject</label>
  			<textarea class= "form-control"name="doubts"> 
  			</textarea>
  		</div>

  		 <button type="submit"class="btn btn-success">Submit</button>
  		
  	</form>
  	
  </div>
</section>
</body>
</html>

