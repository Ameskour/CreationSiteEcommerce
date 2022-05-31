<?php include 'includes/session.php'; ?>
<link rel="stylesheet" href="contact0.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
    background-color: #3c8dbc;
    border-color: #367fa9;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */


/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
iframe{
    float: left;
  
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }


}


.front .contact-info li{
    margin: 10px 0;
    display: flex;
    align-items: center;
  }
  
  .front .contact-info li i{
    width: 26px;
    height: 26px;
    background: #34495e;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 6px;
  }
</style>










<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	     
        <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of ecommerce, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
    <img src="images/maps.jpg" style="width:100%"></div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Email</label>
        <input type="text" id="country" name="email" placeholder="Your email..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
         
<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Contact Us</b></h3>
	  	</div>
	  	<div class="box-body">
          <div class="front">
          
        <ul class="contact-info">
          <li>
            <i class="fas fa-mobile-alt"></i> 06 17 04 60 51
          </li>
          <li>
            <i class="far fa-envelope"></i> ameskour97@gmail.com 
          </li>
          
          <li>
            <i class="fas fa-map-marker-alt"></i> 23 Rue Alwahda tigmi el jadid tarmigte ouarzazate maroc
          </li>
         
          
        </ul>
         
      </div>
	  	</div>
	</div>
</div>     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>