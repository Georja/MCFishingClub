<?php print_r($_POST);
 include('setup.php');
 if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
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
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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