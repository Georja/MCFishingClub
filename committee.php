<!DOCTYPE html>
<html>
<head>
<title>Committee-Marsden Cove Fishing Club</title>
<link rel="stylesheet" href="css/style.css">
   
<style>
  body {
  background-image: url('Images/whangarei-heads-improv.jpg');
  background-repeat: no-repeat;
  background-size: 100% 35%;
}
</style>
</head>
  
    

<body>

   <?php include('header.php');?>
    
<div class="section group">
    
	<div class="col span_9_of_9">
        <h1 class="element">COMMITTEE</h1> 
    
    </div>
</div>
      
<div class="section group">
    
   <div class="col span_9_of_9">
        <p>A Massive Thank You To The 2021/2022 Committee For All Their Hard Work!</p>
    </div>
</div>   

<?php include('setup.php');
    
    
$sql = "SELECT surname, firstname FROM `members` order by surname, firstname;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<p> - Name: " . $row["firstname"]. " " . $row["surname"]. "</p>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>       

    
<?php include('footer.php');?>
    
</body>
</html>