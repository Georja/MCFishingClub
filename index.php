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
  background-color: #3399ff60;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  font-size: 15px;
  font-family: sans-serif;
  font-weight: 700;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #2399ff60;
}
        
body {
  background-image: url('Images/captured-marlin-large.JPG');
  background-repeat: no-repeat;
  background-size: 100% 40%;
  background-color: black
}
     
a:link {
  color: #DBBD5C;
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
    font-stretch: condensed;
}
h2 {
    
    font-size:40px;
    color:white;
    text-align:center;
}
p {
    font-size:20px;
    color:white;
    text-align:left;
        }
</style>
   
</head>
<body>
    
   
<div class="section group">
	
    <div class="col span_4_of_9">
    <ul>
     <li><a class="active" href="index.php">HOME</a></li>
     <li><a href="aboutus.php">ABOUT US</a></li>
     <li><a href="joinus.php">JOIN US</a></li>
     <li><a href="gallery.php">GALLERY</a></li>
     <li><a href="events.php">EVENTS</a></li>
    </ul>
	</div>
    
	<div class="col span_1_of_9">
	   <img src="images/mcfc-logo-sm.jpg" alt="mcfc-logo" style="width:150px;">

	</div>
	<div class="col span_4_of_9">
	   <p>LEADERBOARDS WEIGHMASTERS SPONSORS SAFETY CONTACT FB</p>
	</div>
   
</div> 
    
<div class="section group">
    
	<div class="col span_9_of_9">
        <h1>WELCOME TO THE <br> MARSDEN COVE FISHING CLUB<br>JOIN US TODAY</h1> 
      
        
    </div>
</div>

        
<div class="section group">
    
    <div class="col span_9_of_9">
        <h2> OPENING HOURS <br> The club room is open on Thursday, Friday and Saturday evenings from 4.30pm. <br> Come along and share a fishing yarn or simply catch up with a bunch of people. <br> Look forward to seeing you there!</h2>
    </div>
	
</div>
    
<div class="section group">
    
    <div class="col span_3_of_9">
     <img src="images/the-heads.jpg" alt="the-heads" style="width:347px;height:540px;">  
    </div>
    
    <div class="col span_3_of_9">
        <h2>WELCOME</h2>
        
    <div class="col span_9_of_9">
        <p>Marsden Cove Fishing Club was formed in July 2009 as the result of a few locals meeting at the local Bait & Tackle Shop to yarn about their recent heaviest and largest fish caught and, of course, long discussions regarding the “one that got away”. <br> <br> Situated next door to the Land and Sea Cafe and Bar in the beautiful Marsden Cove Marina, Marsden Point. The club's bar looks over some spectacular views across the marina.<br> <br> The club also hosts events throughout the year for members and their friends and family, including the annual Pink Ribbon Afternoon tea. Become a member and receive emails on upcoming events and other important notifications.<br> <br> From the beginning, the club has enjoyed a mix of men, women and children and proudly promotes itself as a family fishing club. Our objectives are to foster fishing and other aquatic activities for members and families, and to encourage all to have a go at fishing in a sustainable way. The club incorporated Marsden Cove Spearfishing into its ranks in 2011 and has a strong spearfishing following, who give the linefishermen a run for their money.<br> <br> <a href="aboutus.php">Learn More</a></p>
    </div>
        
    </div>
	
</div>   

<div class="section group">
    
    <div class="col span_9_of_9">
      <h2> CHECK OUT OUR AMAZING SPONSERS <br> ON OUR SPONSERSHIP PAGE</h2>
    </div>

</div>
    
<div class="section group">
    
    <div class="col span_9_of_9">
      <h2> BECOME A MEMBER TODAY <br> <a href="joinus.php">Join Now</a></h2>
    </div>

</div>
    
<footer>

</footer>
</body>
</html>