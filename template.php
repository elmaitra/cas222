<!doctype html>

<!--Assignment Name: CAS 222 Ace Website Template
File Name: template.php
Date: 05/03/18
Programmer: Ellorashree Maitra
-->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<base target="_blank"> <!-- this ensures that all links not marked "_self" will open in a new tab -->
    
<title>Ace Website Template</title>
    
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/helper.css" type="text/css">
<link rel="stylesheet" href="css/grid.css" type="text/css">
<link rel="stylesheet" href="css/navigation.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--This links to the external font-awesome stylesheet. I used several fa icons in this code for decoration. Cheatsheet here: http://fontawesome.io/cheatsheet/ To improve web accessibility, always use "aria-hidden="true" and provide a descriptive title. Also, you can make additional styling alterations to the fa class in the css file to make the icons consistent in style with the overall look of the page. -->
   
</head>

<body>

<?php include 'includes/header.inc.html.php';?>
    
<nav class="topnav" id="myTopnav">
    
    <a href="#home" class="active">Home</a>
    <a href="#events">Events</a>
    <a href="#register">Register</a>
    <a href="#contact">Contact</a>
    <a href="#faqs">FAQs</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
</nav>

    
<main>
 <div class="hero">
     <h3>Hero image or slideshow goes here.</h3>
     </div>    
    
<section class="section group">
 <div class="col span_8_of_12">
    <h2>Lorem Ipsum</h2>
    <p>Some text here.</p>
    <p>Some more text.</p>
    </div>
</section>
    <section class="section group">
    <div class="col span_8_of_12">
        <h2>More Lorem Ipsum</h2>
    <ul>
        <li>List Item.</li>
        <li>List Item.</li>
    </ul>
        </div>
    </section>
    
    <section id="sidebar" class="section group">
        <div class="colspan_4_of_12">
        <p>Social Media <br>
            and <br>
          Weather feeds go here.</p>
    </div>
    </section>
</main>
    
<?php include 'includes/footer.inc.html.php';?>

<script src="js/scripts.js"></script>
      
</body>

</html>