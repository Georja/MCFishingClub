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
#members {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#members td, #members th {
  border: 1px solid #ddd;
  padding: 8px;
  background-color: #f2f2f2;
}

/* #members tr:nth-child(even){background-color: #f2f2f2;}

#members tr:hover {background-color: #ddd;} */

#members th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
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
    
  <div class="section group">
    
   <div class="col span_2_of_9">
       
          </div>
</div> 
<div class="section group">
    
   <div class="col span_5_of_9">
<table id="members">
  <tr>
    <th>Position</th>
    <th>Name</th>
    <th>Phone</th>
  </tr>
  
<?php include('setup.php');
    
    
$sql = "SELECT surname, firstname, position, ph FROM `members`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>" .$row["position"]."</td><td>". $row["firstname"]. " " . $row["surname"]."</td><td>".  $row["ph"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>       
</table>
       
  </div>
</div>  
<?php include('footer.php');?>
    
</body>
</html>