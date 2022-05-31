<?php include 'includes/session.php'; ?>

<style>
 body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #3c8dbc;
    border-color: #367fa9;
  text-align: center;
  cursor: pointer;
  width: 35%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>










<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">


      <div class="about-section">
  <h1>About Us Page</h1>
  <p>E-commerce (electronic commerce)</p>
  <p> is the activity of electronically buying or selling of products on online services or over the Internet. Electronic commerce draws on technologies such as mobile commerce, electronic funds transfer, supply chain management, Internet marketing, online transaction processing, electronic data interchange (EDI), inventory management systems, and automated data collection systems. E-commerce is in turn driven by the technological advances of the semiconductor industry, and is the largest sector of the electronics industry.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/ismail.jpg" alt="Jane" style="width:97.5%">
      <div class="container">
        <h2>Ismail Ameskour</h2>
        <p class="title">SMI , S6 </p>
        <p>Faculté Polydisciplinaire - Ouarzazate | Université Ibn Zohr.</p>
        <p>Ameskour97@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/oualid.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Oualid Ait Ben Addi</h2>
        <p class="title">SMI , S6 </p>
        <p>Faculté Polydisciplinaire - Ouarzazate | Université Ibn Zohr.</p>
        <p>oualid@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/soufiane.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Soufiane Oulahcen</h2>
        <p class="title">SMI ,S6</p>
        <p>Faculté Polydisciplinaire - Ouarzazate | Université Ibn Zohr.</p>
        <p>oulahcene@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


<>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/mimoune.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Mimoune El Hamidy</h2>
        <p class="title">SMI , S6</p>
        <p>Faculté Polydisciplinaire - Ouarzazate | Université Ibn Zohr.</p>
        <p>mimoune@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/mabrouk.jpg" alt="Mike" style="width:100% ">
      <div class="container">
        <h2>mohammed mabrouk</h2>
        <p class="title">SMI , s6</p>
        <p>Faculté Polydisciplinaire - Ouarzazate | Université Ibn Zohr.</p>
        <p>mabrouk@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/bouknifi1.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>mohammed el bouknifi</h2>
        <p class="title">SMI , s6</p>
        <p>Faculté Polydisciplinaire - Ouarzazate | Université Ibn Zohr.</p>
        <p>bouknifi@gmail.com</p>
        <p><button class="button">Contact</button></p>
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