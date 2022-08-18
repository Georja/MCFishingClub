<!DOCTYPE html>
<html>
<head>
 <?php
session_start();
    if(isset($_SESSION['loggedin'])){
    //print_r($_SESSION);
    }
    else{
        header('Location: phplogin/login.php');
    }
    ?>
    if ($account['activation_code'] == 'activated') {
	// account is activated
	// Display home page etc
} else {
	// account is not activated
	// redirect user or display an error
}
<title><?php print $title;?>-Marsden Cove Fishing Club</title>
<link rel="stylesheet" href="css/style.css">
   
<style>
  body {
  background-image: url('Images/whangarei-heads-improv.jpg');
  background-repeat: no-repeat;
  background-size: 100% 10%;
}
.aligncenter {
    text-align: center;
}
#members {
  font-size: 25px; 
  border-collapse: collapse;
  width: 100%;
  table-layout: fixed; 
}
#members td, #members th {
  border: 1px solid #f2f2f2;
  padding: 8px;
  background-color: transparent;
  color: white;
}
#members th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: transparent;
  color: black;
  text-shadow:  
    -1px -1px 0 #DBBD5C,
    1px -1px 0 #DBBD5C,
    -1px 1px 0 #DBBD5C,
    1px 1px 0 #DBBD5C;
}
    
</style>
</head>
<body>

   <?php include('header.php');?>
    
<main class="section group">
    
	<div class="col span_9_of_9">
        <table class="centre" id="members">
  <tr>
    <th>Event No</th>
    <th>Title</th>
    <th>Sponsor</th>
  </tr>
 <?php include('setup.php');
    

$sql = "SELECT * FROM `events`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $eventno=$row["id"];
      $title=$row["title"];
      $image=$row["image"];
      $sponsor=$row["sponsor"];
      $eventdate=$row["eventdate"];
      $info=$row["info"];
      $formlink=$row["formlink"];
      $linktext=$row["linktext"];
  echo "<tr> <td>$<a href='edit.php?id=$eventno'>$eventno edit</a> </td><td>$title</td><td>$sponsor</td></tr>";

  }
} else {
  echo "0 results";
}
$conn->close();
?> 
       
        </table>        
          
    </div>
</main>
    

    <?php include('footer.php');?>
    
</body>
</html>