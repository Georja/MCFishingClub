<!DOCTYPE html>
<html>
<head>
<title>Membership Form-Marsden Cove Fishing Club</title>
<link rel="stylesheet" href="css/style.css">
   
<style>
  body {
  background-image: url('Images/whangarei-heads-improv.jpg');
  background-repeat: no-repeat;
  background-size: 100% 12%;
}
    * {
  box-sizing: border-box;
}

input[type=text], select, textarea, input[type=email], input[type=number] {
  width: 100%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #DBBD5C;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #DBBD5C;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    
.cell {
    display: table-cell;
    padding: 0 15px;
    vertical-align: inherit;
    width: 100%;
}
    
.cell:first-of-type {
    padding-left:0
}
    
.cell:last-of-type {
    padding-right:0
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
    
.col-50 {
  float: left;
  width: 50%;
  margin-top: 6px;
}
    
.col-l45 {
  float: left;
  width: 45%;
  margin-top: 6px;
}
    
.col-5 {
  float: left;
  width: 5%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media only screen and (max-width: 600px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_1_of_9, .span_2_of_9, .span_3_of_9, .span_4_of_9, .span_5_of_9, .span_6_of_9, .span_7_of_9, .span_8_of_9, .span_9_of_9 { width: 100%; }
}
</style>
<?php print_r($_POST);
 include('setup.php');
 if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
   

// get the variables from the $_POST array - the contents displayed here

//Array ( [firstname] => Georja [lastname] => Loft [email] => georja@mail.com [subject] => Hi )
//Array ( [firstname] => G [lastname] => Loft [address] => whangarei [city] => [postcode] => [email] => [mobilephone] => [phone] => )

$firstname = test_input($_POST["firstname"]);
$lastname = test_input($_POST["lastname"]);
$addressline1 = $_POST["addressline1"];
$addressline2 = $_POST["addressline2"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];
$email = $_POST["email"];
$mobilephone = $_POST["mobilephone"];
$phone = $_POST["phone"];

//Now use them in the insert statement - change myguest to our table contacts, add subject field in and rename the examples with our prepared variables 

$sql = "INSERT INTO membership (fname, lname, add1, add2, city, pcode, email, mphone, phone)
VALUES ('$firstname', '$lastname', '$addressline1', '$addressline2', '$city', '$postcode', '$email', '$mobilephone', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
        
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
</head>
<body>
    <?php include('header.php');?>
    
   <div class="section group"> 
    
    <div class="col span_2_of_9"> </div>
    
<div class="col span_5_of_9">


<h2>Membership Form</h2>

  <form action="membership.php" method="post">
  <div class="container">

  <div class="cell:first-of-type">
      <span class="error">* required field</span>
      <div class="col-50">
      <label for="fname">First Name</label>
    </div>
    
      <div class="col-50">
      <label for="lname">Last Name</label>
    </div>

  </div>
  <div class="cell:last-of-cell">
      <div class="col-l45">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <span class="error">* <?php echo $fnameErr;?></span>
    </div>
      <div class="col-5">
    </div>
      <div class="col-l45">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
    </div>
    
<div class="container">
<div class="cell:first-of-type">
      <div class="col-50">
      <label for="add1">Address Line 1</label>
    </div>
    
      <div class="col-50">
      <label for="add2">Address Line 2</label>
    </div>

  </div>
  <div class="cell:last-of-cell">
      <div class="col-l45">
      <input type="text" id="add1" name="addressline1" placeholder="Your address..">
    </div>
      <div class="col-5">
    </div>
      <div class="col-l45">
      <input type="text" id="add2" name="addressline2" placeholder="Other address..">
    </div>
  </div>
    </div>

<div class="container">
<div class="cell:first-of-type">
      <div class="col-50">
      <label for="city">City</label>
    </div>
    
      <div class="col-50">
      <label for="pcode">Post Code</label>
    </div>

  </div>
  <div class="cell:last-of-cell">
      <div class="col-l45">
      <input type="text" id="city" name="city" placeholder="Your city..">
    </div>
      <div class="col-5">
    </div>
      <div class="col-l45">
      <input type="number" id="pcode" name="postcode" placeholder="Your post code..">
    </div>
  </div>
    </div>
      
    
<div class="container">
 <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="Your email..">

    </div>
  </div>
</div>
    
<div class="container">
 <div class="row">
    <div class="col-25">
      <label for="mobilephone">Mobile Phone</label>
    </div>
    <div class="col-75">
      <input type="text" id="mphone" name="mobilephone" placeholder="Your mobile..">

    </div>
  </div>
</div>
    
<div class="container">
 <div class="row">
    <div class="col-25">
      <label for="phone">Phone</label>
    </div>
    <div class="col-75">
      <input type="text" id="phone" name="phone" placeholder="Your phone..">

    </div>
  </div>
</div>
  
  <br>
    
  <div class="row">
    <input type="submit" value="Submit">
  </div>
      </form>

</div>
    </div>
    
<div class="col span_2_of_9">
    </div>

  <?php include('footer.php');?>
    
</body>
</html>
