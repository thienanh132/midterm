<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: rgb(0, 115, 0);
	position: fixed;
  	width: 100%;
  	top: 0;
}

li a {
	display: block;
	color: white;
	text-align: center;
	padding: 20px 20px;
	
	text-decoration: none;
	font-size: 25px;
	float: left;
}

li a:hover {
	background-color: rgb(190, 240, 35);
	text-decoration: none;
}

li.right {
	float: right;
	
}

form {
	text-align: center;
	margin-top: 100px;
}

h2 {
	
	margin-bottom: 5px;
}

input[type=text], input[type=date], input[type=email], input[type=password]{
  width: 30%;
  padding: 10px;
  
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[name=state], input[name=zipcode]{
	width: 14.1%;
	padding: 10px;
	border: 1px solid #ccc;
 	border-radius: 4px;
  	resize: vertical;

}

input[type=submit] {
  background-color: rgb(0, 115, 0);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  font-size:15px;
}

input[type=submit]:hover {
  background-color: rgb(190, 240, 35);
}

.login a:link {
	color: black;
	font-size: 20px;
}

.login a:hover{
	background-color: rgb(218, 240, 110);
}
.error {color: #FF0000;}
</style>
</head>

<body>

	 <form action = "assessment" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<h2>Create your account</h2>
		<br>
		<input type="text" name="firstName" placeholder="First Name">
		@if($errors->first('firstName'))
		<div class="alert-danger">{{$errors->first('firstName')}}</div>
		@endif
		<br>
		<input type="text" name="lastName" placeholder="Last Name">
		@if($errors->first('lastName'))
		<div class="alert-danger">{{$errors->first('lastName')}}</div>
		@endif
		<br>
		<input type="email" name="email" placeholder="Email">
		@if($errors->first('email'))
		<div class="alert-danger">{{$errors->first('email')}}</div>
		@endif
		<br>
		<input type="password" name="password" placeholder="Password">
		@if($errors->first('password'))
		<div class="alert-danger">{{$errors->first('password')}}</div>
		@endif
		<br>
		
		<input type="submit" value="Sign Up" name="submit">
		
	</form>
</body>
</html>