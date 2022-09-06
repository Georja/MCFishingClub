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
  //echo "<tr> <td>" .$row["title"]."</td><td>". $row["image"]. " " . $row["sponsor"]."</td><td>".  "</td></tr>";
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
        <h2><?php print $image;?> <br> <br> <?php print $text;?></h2>
    </div>
        
    <div class="col span_3_of_9">
        <p>Marsden Cove Fishing Club is located at the Marsden Cove Marina (next to Land and Sea Café) and overlooks the marina with prime viewing of the boat ramp — which can provide some entertainment on the odd occasion.<br> <br> Members, both local and from further afield have created a strong sense of community within the club. It’s a great place to bring the family, meet up with your friends, tell those great fishing stories, and compete for the annual angler of year prize. <br> <br> To become a member, pop into the club on a Thursday, Friday or Saturday night and fill out a membership form, or complete the online registration form.</p>
    </div>
    
    <div class="col span_3_of_9">
	    <p>BUSINESS WALL SIGN</p>
    </div>
    
    <div class="col span_3_of_9">
        <p>For a minimal annual fee of $150.00 +gst  you will have your company sign and logo displayed on the club wall. <br> <br> Sponsorship renewal annual fee is $130.00 +gst (if we already have your company logo wall plaque) <br> <br> Contact the club secretary for more details.</p>

    </div>
        
</div>   

   
<?php include('footer.php');?>
    
</body>
</html>