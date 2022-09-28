<!DOCTYPE html>
<html>
<head>
    <?php include('setup.php');
    
    //print_r($_GET);
    $pageID= $_GET["id"];

$sql = "SELECT * FROM `pages`WHERE id =$pageID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //echo "<tr> <td>" .$row["title"]."</td><td>". $row["image"]."</td></tr>";
      $title=$row["title"];
      $image=$row["image"];
      $text=$row["text"];
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
<title><?php print $title;?>-Marsden Cove Fishing Club</title>
<link rel="stylesheet" href="css/style.css">
   
<style>
  body {
  background-image: url('Images/whangarei-heads-improv.jpg');
  background-repeat: no-repeat;
  background-size: 100% 18%;
}
img{ 
    width: 100%;
}

.line li{ 
    color:white;
    font-size: 20px;
    font-family: sans-serif;
    padding: 5px 20px;
    }
</style>
</head>
<body>

   <?php include('header.php');?>
    
<div class="wrapper">
    
<div class="section group">
    
	<div class="col span_9_of_9">
     <h1 class="element"><?php print $title;?></h1>          
    </div>
</div>
      
<div class="section group">
        
    <div class="col span_3_of_9">
     <img src="Images/<?php print $image;?>">    
    </div>
    
    <div class="line col span_6_of_9">
        <p><?php print $text;?></p>

    </div>
        
</div>   

</div>
    
<?php include('footer.php');?>

</body>
</html>