<!DOCTYPE html>
<html>
<head>
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

        /*  GRID OF NINE  */
.span_9_of_9 {
	width: 100%;
}

.span_8_of_9 {
  	width: 88.75%;
}

.span_7_of_9 {
  	width: 77.51%;
}

.span_6_of_9 {
  	width: 66.26%;
}

.span_5_of_9 {
  	width: 55.02%;
}

.span_4_of_9 {
  	width: 42%;
}

.span_3_of_9 {
  	width: 32.53%;
}

.span_2_of_9 {
  	width: 21.28%;
}

.span_1_of_9 {
  	width: 10.04%;
}

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 600px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_1_of_9, .span_2_of_9, .span_3_of_9, .span_4_of_9, .span_5_of_9, .span_6_of_9, .span_7_of_9, .span_8_of_9, .span_9_of_9 { width: 100%; }
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  background-color: rgba(100, 100, 100, 0.2);

}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
   
<div class="section group">
	
    <div class="col span_4_of_9">
        
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="aboutus.php">ABOUT US</li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
     <li><a href="#about">EVENTS</a></li>
</ul
	<p> <a href="index.php">HOME</a>   <a href="aboutus.php">ABOUT US</a>  <a href="joinus.php">JOIN US</a>  <a href="gallery.php">GALLERY</a> <a href="events.php">EVENTS</a></p>
	</div>
	<div class="col span_1_of_9">
	   <img src="images/mcfc-logo-sm.jpg" alt="mcfc-logo" style="width:150px;">

	</div>
	<div class="col span_4_of_9">
                
<ul>
  <li><a class="active" href="#home">LEADERBOARD</a></li>
  <li><a href="aboutus.php">ABOUT US</li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
     <li><a href="#about">EVENTS</a></li>
</ul
	   <p>S WEIGH MASTERS SPONSORS SAFETY CONTACT FB</p>
	</div>
   
</div> 
    
</body>
</html>