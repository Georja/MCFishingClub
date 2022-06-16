<!DOCTYPE html>
<html>
<head>
<title>Home Page-Marsden Cove Fishing Club</title>
    <style>
    /*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }


/*  GROUPING  */
.group:before,
.group:after {
	content:"";
	display:table;
}
.group:after {
	clear:both;
}
.group {
    zoom:1; /* For IE 6/7 */
}

/*  GRID OF THREE  */
.span_3_of_3 {
	width: 100%;
}
.span_2_of_3 {
	width: 66.1%;
}
.span_1_of_3 {
	width: 32.2%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 600px) {
	.col { margin: 1% 0 1% 0%;}
	.span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; }
}
        body {
  background-image: url('Images/captured-marlin-large.JPG');
  background-repeat: no-repeat;
  background-size: cover;
}
        a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: #DBBD5C;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: #DBBD5C;
  background-color: transparent;
  text-decoration: underline;
}
h1 {
            
    font-size:60px;
    color:#DBBD5C; 
    text-align: center;
}
    </style>
   
</head>

    
   
<header class="section group">
	
    <div class="col span_1_of_3">
	<p>

        <a href="home.php">HOME</a>   <a href="aboutus.php">ABOUT US</a>  <a href="joinus.php">JOIN US</a>  <a href="gallery.php">GALLERY</a> <a href="events.php">EVENTS</a></p>
	</div>
	<div class="col span_1_of_3">
	   <img src="images/mcfc-logo.jpg" alt="mcfc-logo" style="width:150px;height:150px;">

	</div>
	<div class="col span_1_of_3">
	   <p>LEADER BOARDS    WEIGH MASTERS  SPONSORS   SAFETY   CONTACT                                                            FB</p>
	</div>
   
</header> 
<div class="section group">
	<div class="col span_3_of_3">
        <h1>WELCOME TO <br> THE MARSDEN COVE FISHING CLUB<br>JOIN US </h1> 
      
        
    </div>
</div>
	
    <div class="col span_2_of_3">
	<p>BUSINESS WALL SIGN</p>
</div>
    <div class="col span_2_of_3">
        <p>For a minimal annual fee of $150.00 +gst  you will have your company sign and logo displayed on the club wall.

Sponsorship renewal annual fee is $130.00 +gst (if we already have your company logo wall plaque)

Contact the club secretary for more details.</p>
        
        <div class="col span_2_of_3">
 <p>CLUB COMITTEE</p>
 <P>Current committee members details.</P>
</div>
<footer class="section group">
	<div class="col span_3_of_3">
	Footer
	</div>
	
</footer>

</body>
</html>