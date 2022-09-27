<?php print_r($_POST);?>

<?php include('header.php');?>

// get the variables from the $_POST array - the contents displayed here

//Array ( [firstname] => Georja [lastname] => Loft [email] => georja@mail.com [subject] => Hi )

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email”];
$subject = $_POST[“subject"];

//Now use them in the insert statement - change myguest to our table contacts, add subject field in and rename the examples with our prepared variables 

$sql = "INSERT INTO contacts (firstname, lastname, email, subject)
VALUES ('$firstname', '$lastname ', '$email’, ‘$subject')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
