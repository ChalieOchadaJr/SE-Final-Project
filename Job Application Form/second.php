<html>
<head>
	<title> Job Application Form </title>
	<link rel="stylesheet" href="style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	
</head>
<body>

	<div class="container">
		<div class="title">Job Application Form</div>
		<br>
		<div class="title2">Personal Information</div>

		<form action="sub.php" name="form" onsubmit="validate()">

			<div class="user-details">
			<div class="input-box">
				<span class="details">First Name</span>
				<input type="text" id="name" placeholder="Enter your first name" required>
			</div>
			<div class="input-box">
				<span class="details">Middle Name</span>
				<input type="text" placeholder="Enter your middle name" required>
			</div>
			<div class="input-box">
				<span class="details">Last Name</span>
				<input type="text" placeholder="Enter your last name" required>
			</div>
			<div class="input-box">
				<span class="details">Email</span>
				<input type="text" placeholder="Enter your email" required>
			</div>
			<div class="input-box">
				<span class="details">Phone Number</span>
				<input type="text" placeholder="Enter your phone number" required>
			</div>
			<div class="input-box">
				<span class="details">Address</span>
				<input type="text" placeholder="Enter your address" required>
			</div>
		</div>
		<div class="gender-details">
		<input type="radio" name="gender" id="dot-1">
		<input type="radio" name="gender" id="dot-2">
		<span class="gender-title">Gender</span>
			<div class="category">
				<label for="dot-1">
					<span class="dot one"></span>
					<span class="gender">Male</span>
				</label>
			<label for="dot-2">
					<span class="dot two"></span>
					<span class="gender">Female</span>
				</label>
			</div>
		</div>
		<div class="date">
			<span class="details">Birthdate</span><br>
			<input type="date">
			</div>
			<br>
			<div class="title2">Employment Information</div>
			<div class="user-details">
			<div class="input-box">
				<span class="details">Position of which you are applying</span>
				<input type="text" placeholder="Position" required>
			</div>
			<div class="input-box">
				<span class="details">Salary Requirements</span>
				<input type="text" placeholder="Enter Salary" required>
			</div>
			<div class="input-box">
				<span class="details">When can you start?</span>
				<input type="text" placeholder="" required>
			</div>
		</div>
		        <span class="details">Employment Type</span>
				<div class="radio">
					<input class="radio__input" type="radio" value="option1" name="myRadio" Id="myRadio1">
					<label class="radio__label"	for="myRadio1">Full-Time</label>
					<input class="radio__input" type="radio" value="option2" name="myRadio" Id="myRadio2">
					<label class="radio__label"	for="myRadio2">Part-Time</label>
					<input class="radio__input" type="radio" value="option3" name="myRadio" Id="myRadio3">
					<label class="radio__label"	for="myRadio3">Temporary</label>
					<input class="radio__input" type="radio" value="option4" name="myRadio" Id="myRadio4">
					<label class="radio__label"	for="myRadio4">Internship</label>
	</div>
	        <br>
			<br>
			<div class="title2">Educational Background</div>
			<div class="user-details">
			<div class="input-box">
				<span class="details">Elementary</span>
				<input type="text" placeholder="School Name" required>
			</div>
			<div class="input-box">
				<span class="details">School Year</span>
				<input type="text" placeholder="Course" required>
			</div>
			<div class="input-box">
				<span class="details">Highschool</span>
				<input type="text" placeholder="School Name" required>
			</div>
			<div class="input-box">
				<span class="details">School Year / Course</span>
				<input type="text" placeholder="Course" required>
			</div>
			<div class="input-box">
				<span class="details">College</span>
				<input type="text" placeholder="Course" required>
			</div>
			<div class="input-box">
				<span class="details">School Year / Course</span>
				<input type="text" placeholder="Course" required>
			</div>

		</div>
			
		<div class="button">
			<input type="submit" value="Submit">
			
		</div>
		
	</form>
</div>
	<script>
		function validate() {
			var decide = confirm("SUCCESSFULLY SUBMITTED");
			if(decide == true){
				 window.location="sub.php";
				return true;
			}else if(decide == false){
				
				alert("Form submission cancelled! pls check your form ");	
				
				
			}
		}
	</script>
</body>
</html>