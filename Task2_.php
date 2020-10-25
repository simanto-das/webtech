<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
	  	$studentIdError = $studentNameError=$GenderError=$StudentEmailError=$CityError=$StateError=$CountryError=$AdressError="";
	  	$studentid=$studentname=$gender=$email=$city=$state=$country=$adress=$zip="";

	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["studentid"])) {
				  $studentIdError = "Id is required";
			}
			else {
				$studentid = "Id is: " . $_REQUEST["studentid"];
			}
		} 

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["studentname"])) {
				  $studentNameError = "Name is required";
			}
			else {
				$studentname = "Name is: " . $_REQUEST["studentname"];
			}
		} 
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $GenderError = "gender is required";
			}
			else {
				$gender = "Gender is: " . $_REQUEST["gender"];
			}
		} 
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["studentemail"])) {
				  $StudentEmailError = "Email is required";
			}
			else {
				$email = "Email is: " . $_REQUEST["email"];
			}
		} 
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $CityError = "City name is required";
			}
			else {
				$city = "City is: " . $_REQUEST["city"];
			}
		} 
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["state"])) {
				  $StateError = "State name is required";
			}
			else {
				$state = "State is: " . $_REQUEST["state"];
			}
		} 
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["country"])) {
				  $CountryError = "Country name  is required";
			}
			else {
				$Country = "Country Name is: " . $_REQUEST["country"];
			}
		} 
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["adress"])) {
				  $AdressError = "Adress  is required";
			}
			else {
				$adress = "Adress  is: " . $_REQUEST["adress"];
			}
		}
	?>


	
	

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<pre>Student Id: <input type="text" name="studentid"> <span><?php echo $studentIdError; ?></span></pre>

	<pre>Student Name: <input type="text" name="studentname"> <span><?php echo $studentNameError; ?></span></pre>
	<pre>Gender <br><input type="checkbox" name="gender" value="male">Male<br><input type="checkbox" name="gender" value="female">Female  <span><?php echo $GenderError; ?></span></pre>
	
	<pre> Student Email <input type="text" name="email"> <span><?php echo $StudentEmailError; ?></span></pre>
	<pre>Adress <input type="text" name="adress" placeholder="street adress"> <span><?php echo $AdressError; ?></span>

       <input type="text" name="adressline2" placeholder="adressline2">

       <input type="text" name="city" placeholder="city"> <input type="text" name="state"placeholder="state/provience/Region"><br>
	 <span><?php echo $CityError; ?></span>    <span><?php echo $StateError; ?></span>

	<input type="text" name="zip" placeholder="zip/postal code"> <input type="text" name="country" placeholder="country"> <span><?php echo $CountryError; ?></pre>
	                                    
	                                                                 
	<input type="submit">
	</form>
	<br>
	<?php
	echo $studentid;
	echo "<br>";
	echo $studentname;
	echo "<br>";
	echo $gender;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $city;
	echo "<br>";
	echo $state;
	echo "<br>";
	echo $country;
	echo "<br>";
	echo $adress;
	echo "<br>";
	echo "zip is ".$_REQUEST["zip"]

	?>

</body>
</html>