<!DOCTYPE html>
<html>
<head>
<title>Contact-Marsden Cove Fishing Club</title>
<link rel="stylesheet" href="css/style.css">
   
<style>
  body {
  background-image: url('Images/whangarei-heads-improv.jpg');
  background-repeat: no-repeat;
  background-size: 100% 12%;
}
    * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #DBBD5C;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #DBBD5C;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media only screen and (max-width: 600px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_1_of_9, .span_2_of_9, .span_3_of_9, .span_4_of_9, .span_5_of_9, .span_6_of_9, .span_7_of_9, .span_8_of_9, .span_9_of_9 { width: 100%; }
}
</style>
</head>
<body>
    <?php include('header.php');?>
    
   <div class="section group">
    
	<div class="col span_9_of_9">
        <h1 class="element">CONTACT</h1> 
          
    </div>
    </div>   
    <div class="section group">   
    <div class="col span_9_of_9">
        <div class="ctext">We welcome enquiries and new members</div>
        
    </div>
   </div>
    
    <div class="section group">
    
    <div class="col span_2_of_9 ctext">

    </div>
        <div class="col span_5_of_9">

   <div class="col span_4_of_9 rtext">
             <img src="Images\address.jpg">

        <h4 id="headline-13-117" class="ct-headline brewery-contact-3-title">Address</h4>
        <div id="text_block-15-117" class="ct-text-block brewery-body-text">PO Box 202, Ruakaka,<br>Whangarei 0151, Northland</div>
        
 </div>
            <div class="col span_1_of_9 rtext">
            </div>
            <div class="col span_4_of_9 ltext">
    
                <img src="Images\phone.jpg">
    
        <h4 id="headline-45-117" class="ct-headline brewery-contact-3-title">Phones</h4>
        <div id="text_block-46-117" class="ct-text-block brewery-body-text">
            <b>Secretary -&nbsp;</b>(021) 744 594<b></b></div>
        <div id="fancy_icon-39-117" class="ct-fancy-icon brewery-contact-3-icon">
            <svg id="svg-fancy_icon-39-117">
                
                <img src="Images/email.jpg">
            </svg></div>
        <h4 id="headline-40-117" class="ct-headline brewery-contact-3-title">Emails</h4>
        <a id="link_text-50-117" class="ct-link-text" href="mailto:marsdencovefishingclub@gmail.com" target="_self">marsdencovefishingclub@gmail.com</a>
            </div>
        </div>
    <div class="col span_2_of_9">

         
    </div>
    </div>  
    
    <div class="col span_2_of_9"> </div>
    
<div class="col span_5_of_9">


<h2>Enquiry Form</h2>

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email..">

    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
    </div>
    
<div class="col span_2_of_9">
    </div>

  <?php include('footer.php');?>
    
</body>
</html>
