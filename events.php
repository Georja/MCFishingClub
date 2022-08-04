<!DOCTYPE html>
<html>
<head>
    <?php include('setup.php');
    
    //print_r($_GET);
    $pageID= $_GET["id"];

$sql = "SELECT * FROM `events`WHERE id =$pageID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //echo "<tr> <td>" .$row["title"]."</td><td>". $row["image"]. " " . $row["sponsor"]."</td><td>".  "</td></tr>";
      $title=$row["title"];
      $image=$row["image"];
      $sponsor=$row["sponsor"];
      $eventdate=$row["eventdate"];
      $info=$row["info"];
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
  background-size: 100% 12%;
}
.aligncenter {
    text-align: center;
}

    
</style>
</head>
<body>

   <?php include('header.php');?>
    
<div class="section group">
    
	<div class="col span_9_of_9">
        <h1 class="element"><?php print $title;?></h1>
        
          
    </div>
</div>
    
<div class="section group">
    
    <div class="col span_9_of_9">
        <h2><?php print $title;?> <br> <br> <?php print $eventdate;?></h2>
    </div>

<div class="section group">
    
     <div class="col span_2_of_9">
        <p> </p>
    </div>
    
    <div class="col span_5_of_9">
        <?php print $info;?>
    </div>
    
     <div class="col span_2_of_9">
      <p class="aligncenter">
        <img src="Images/<?php print $image;?>"></p>
        <p class="aligncenter">
        <img src="Images/<?php print $sponsor;?>"></p>
    </div>
</div>
    
<div class="section group">
    
     <div class="col span_2_of_9">
        <p> </p>
    </div>
    
    <div class="col span_5_of_9">
        <h2><a href="">Chicks @ The Chicks Registration Form</a></h2>  
    </div>
    
     <div class="col span_2_of_9">
       <p> </p>
    </div>
</div>
    
<div class="section group">

    <div class="col span_9_of_9">
     <h2>8th - 10th April 2021</h2> 
    </div>   
</div> 
    
<div class="section group">
    
     <div class="col span_2_of_9">
        <p> </p>
    </div>
    
    <div class="col span_5_of_9">
        <p>WOW! What an amazing event! <br> <br> Thank you to all the amazing ladies who entered and the amazing skippers who kept everyone safe and on the spots!</p>
    </div>
    
     <div class="col span_2_of_9">
       <p> </p>
    </div>
</div>
    
<div class="section group">

    <div class="col span_9_of_9">
     <h2>Here Are The Results!</h2> 
    </div>   
</div>
    
</div>

    <?php include('footer.php');?>
    
</body>
</html>