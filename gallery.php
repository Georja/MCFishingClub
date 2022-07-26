<!DOCTYPE html>
<html>
<head>
<title>Gallery-Marsden Cove Fishing Club</title>
<link rel="stylesheet" href="css/style.css">
   
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
  display: -ms-flexbox; /* IE10 */
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 24%;
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
    flex: 48%;
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

<!-- Photo Grid -->
<div class="section group">
    
	<div class="col span_9_of_9">
		<div class="row"> 
  			<div class="column">
    				<img src="images/the-heads-improv.PNG">
    				
  			</div>
  			<div class="column">
       				 <img src="images/marlin-weigh-improv.JPG">
            </div> 
            <div class="column">
        			<img src="images/diving.jpg">
            </div>  
      		<div class="column">
       				 <img src="images/bbq.JPG">
            </div>  
		</div>
	</div>
</div>

<div class="section group">
    
	<div class="col span_9_of_9">
		<div class="row"> 
  			<div class="column">
    				<img src="images/captured-marlin.JPG">
    				
  			</div>
  			<div class="column">
       				 <img src="images/marlin.JPG">
            </div> 
            <div class="column">
        			<img src="images/snapper.JPG">
            </div>  
      		<div class="column">
       				 <img src="images/whangarei-heads-full.jpg">
            </div>  
		</div>
	</div>
</div>
    
<div class="section group">
    
	<div class="col span_9_of_9">
		<div class="row"> 
  			<div class="column">
    				<img src="images/jackie-yellowfish.jpg">
    				
  			</div>
  			<div class="column">
       				 <img src="images/guy-with-fish.jpg">
            </div> 
            <div class="column">
        			<img src="images/guy-with-fish2.jpg">
            </div>  
      		<div class="column">
       				 <img src="images/jamie-weigh-fish.jpg">
            </div>  
		</div>
	</div>
</div>
<?php include('footer.php');?>
  
</body>
</html>