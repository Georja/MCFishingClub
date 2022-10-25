<?php print_r($_POST);
 include('setup.php');

// get the variables from the $_POST array - the contents displayed here

//Array ( [firstname] => Georja [lastname] => Loft [email] => georja@mail.com [subject] => Hi )
//Array ( [firstname] => G [lastname] => Loft [address] => whangarei [city] => [postcode] => [email] => [mobilephone] => [phone] => )

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$postcode = $_POST["postcode"];
$mobilephone = $_POST["mobilephone"];
$city = $_POST["city"];
$phone = $_POST["phone"];

//Now use them in the insert statement - change myguest to our table contacts, add subject field in and rename the examples with our prepared variables 

$sql = "INSERT INTO membership (fname, lname, email)
VALUES ('$firstname', '$lastname ', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>