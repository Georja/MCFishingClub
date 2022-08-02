<!DOCTYPE html>
<html>
<head>
    <?php include('setup.php');
    
    
$sql = "SELECT * FROM `events`WHERE id =1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>" .$row["title"]."</td><td>". $row["image"]. " " . $row["sponsor"]."</td><td>".  "</td></tr>";
      $title=$row["title"];
      $image=$row["image"];
      $sponsor=$row["sponsor"];
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
</style>
</head>
<body>

   <?php include('header.php');?>
    
<div class="section group">
    
	<div class="col span_9_of_9">
        <h1 class="element"><?php print $title;?></h1> 
        <img src="Images/<?php print $image;?>">
          
    </div>
</div>
    
<div class="section group">
    
    <div class="col span_9_of_9">
        <h2>Cogan's Chicks @ The Chicks for 2022 <br> <br> October 22nd & 23rd 2022</h2>
    </div>

<div class="section group">
    
     <div class="col span_2_of_9">
        <p> </p>
    </div>
    
    <div class="col span_5_of_9">
        <p>This year's theme is "Essential Workers" so get your thinking caps on and put your team together for an awesome competition! <br> <br> Tickets are available to purchase either by the registration form below or over the bar at the Marsden Cove Fishing Club <br> Non Members: $70.00 <br> Members: $60.00 <br> Juniors: $40.00 <br> Dinner Tickets: $20.00</p>
    </div>
    
     <div class="col span_2_of_9">
       <p> </p>
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