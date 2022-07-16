<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark nav-dark">
    <a class="navbar-brand" href="javascript: history.go(-1)">Back</a>
    <ul class="navbar-nav ml-auto">
    	<li><a class="nav-link" href="javascript: history.go(+1)">Prev</a></li>
    </ul>
</nav>
<!--NAv bar end-->


<div class="row" style="margin-bottom: 50px;">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2 class="text-center">Add Post</h2>
		<form method="POST" action="add_post.php">
			<label for="name">Post Title: </label>
			<input type="text" name="title" class="form-control" placeholder="Type Your Post Title Here">

			<div class="form-row">
			    <div class="form-group col-md-6">
				    <label for="inputState">Category:</label>
				      <select id="inputState" name="cat" class="form-control">
				        <option selected disabled="True">Choose...</option>
				        <option value="Android">Android Development</option>
				        <option value="Web">Web Development</option>
				        <option value="Others">Others</option>
				      </select>
				</div>
			    <div class="form-group col-md-6">
			      	<label for="name">Thumnail: </label>
			      	<div class="input-group">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
					  </div>
					  <div class="custom-file">
					    <input accept="image/*" type="file" name="thumnail" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
					    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
					  </div>
					</div>
			    </div>
			</div>


			<label for="name">Description: </label>
			<textarea name="des" class="form-control"></textarea>
			<br>
			<input type="button" value="Add Post" name="btn_add" class="btn btn-success">
		</form>
	</div>
	<div class="col-md-3"></div>
</div>





<?php include_once 'js.php'; ?>
<?php include_once 'footer.php'; ?>
</body>
</html>



<?php 
	/*$conn = mysqli_connect("localhost", "root", "", "myportfolio");
	if(!$conn){
		echo "Not Connected";
	}*/
	
		echo $_POST['name'];

	/*$title = mysqli_real_escape_string($conn, $_REQUEST['name']);
	$cat = mysqli_real_escape_string($conn, $_REQUEST['cat']);
	$thumnail = mysqli_real_escape_string($conn, $_REQUEST['thumnail']); 
	$des = mysqli_real_escape_string($conn, $_REQUEST['des']);
 
// Attempt insert query execution
	$sql = "INSERT INTO projects(name, cat, thumnail, des) VALUES('$title', '$cat', '$thumnail', '$des')";
	mysqli_query($conn, $sql);
	if(mysqli_query($conn, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}*/
 ?>