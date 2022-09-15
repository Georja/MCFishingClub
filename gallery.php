<!DOCTYPE html>
<html>
<head>
<title>Gallery-Marsden Cove Fishing Club</title>
<link rel="stylesheet" href="css/style.css">
   
    <?php include('setup.php');?>


    
     

<title><?php print $title;?>-Marsden Cove Fishing Club</title>
    
<style>
  body {
  background-image: url('Images/whangarei-heads-improv.jpg');
  background-repeat: no-repeat;
  background-size: 100% 10%;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}


.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
    
img{ 
    width: 100%;
}
    
</style>
</head> 
<body>

<!-- Header -->
<?php include('header.php');?>
    
<div class="section group">
    
	<div class="col span_9_of_9">
        <h1 class="element">GALLERY</h1> 
          
    </div>
</div>

<div class="wrapper">
<div class="section group">
    <?php 
 $sql = "SELECT * FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    $rowcount=mysqli_num_rows($result);
    $r=round($rowcount/4);
    print$r;
?>        
    <div class="col span_9_of_9">
        <div class="row">
        <?php while($row = $result->fetch_assoc()) {
        ?>
  <div class="column">
        
    
  //echo "<tr> <td>" .$row["title"]."</td><td>". $row["image"]. " " . $row["sponsor"]."</td><td>".  "</td></tr>";
      $image=$row["name"]; 
      ?>
    <img src="images/<?php print $image;?>">    

    <?php   } ?>
            </div>
    
   
<?php   }
 else {
  echo "0 results";
}
    
$conn->close();
?> </div>
</div>

<?php include('footer.php');?>
  
</body>
</html>