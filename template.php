<!doctype html>

<!--Assignment Name: CAS 222 Ace Website Template
File Name: template.html
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
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--This links to the external font-awesome stylesheet. I used several fa icons in this code for decoration. Cheatsheet here: http://fontawesome.io/cheatsheet/ To improve web accessibility, always use "aria-hidden="true" and provide a descriptive title. Also, you can make additional styling alterations to the fa class in the css file to make the icons consistent in style with the overall look of the page. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
    
</head>

<body>

<?php include 'includes/header.inc.html.php';?>

<nav class="menu">
 <ul>
    <li>Home</li>
    <li>Events</li>
    <li>Register</li>
    <li>Contact</li>
    <li>FAQs</li>
  </ul>   
</nav>
   
<script>
    
$( document ).ready(function() {

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

});
    
</script>
    
<main>
  
<h2>Lorem Ipsum</h2>
    
<section>    

    
<p>Some text here.
</p>

   
</section>
    
<section>
    
 <h2>More Lorem Ipsum</h2> 
    <ul>
    <li>List Item</li>
    <li>List Item</li>
    <li>List Item</li>
    </ul>

</section>
    
</main>
    
<?php include 'includes/footer.inc.html.php';?>
      
</body>

</html>