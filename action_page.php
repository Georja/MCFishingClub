<?php print_r($_POST);
 include('setup.php');

// get the variables from the $_POST array - the contents displayed here

//Array ( [firstname] => Georja [lastname] => Loft [email] => georja@mail.com [subject] => Hi )
//Array ( [firstname] => G [lastname] => Loft [address] => whangarei [city] => [postcode] => [email] => [mobilephone] => [phone] => )

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
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