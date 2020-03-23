<html>
<head>
	<style>
		form {
			margin-top: 50px;
		}
		.control {
			width: 40%;
			min-height: 2rem;
			border-radius: 2px;
		}
		input[type="submit"] {
			padding: 5px;
		}
	</style>
</head>
<body>


	<form action="processed.php" method="post">
		<h3>Contact Form</h3>
		<h6>Please fill in your details carefully</h6>
		<label>First name</label> <br>
		<input type="text" name="first_name" class="control">
		<br> <br>
		<label>Last name</label> <br>
		<input type="text" name="last_name" class="control">
		<br> <br>
		<label>Email</label> <br>
		<input type="email" name="email" class="control" placeholder="email address">
		<br> <br>
		<label>Gender</label> <br>
		<label for="male">
			<input type="radio" name="gender" id="male" value="male">
			Male
		</label>
		<label for="female">
			<input type="radio" name="gender" id="female" value="Female">
			Female
		</label>
		<br> <br>

		<label>State of Residence</label> <br>
		<select name="state" class="control">
			<option value="lagos">Lagos</option>
			<option value="ogun">Ogun</option>
			<option value="oyo">Oyo</option>
			<option value="ekiti">Ekiti</option>
		</select>
		<br> <br>
		<label>Message</label> <br>
		<textarea cols="30" name="message" rows="10" class="control"></textarea>
		<br> <br>
		<input type="submit" name="submit" value="Submit details">
	</form>
</body>
</html>
