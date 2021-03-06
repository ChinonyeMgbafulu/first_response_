<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Response</title>
<link rel="stylesheet" media="all" href="style.css"  />
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<style>
  .slides{
      min-height: 300px;
  }
  

/* cards */
body{
    background-color: #ededed;
    
}
.page-footer{
    font-size: 12px;
}

.card {
margin: 30px auto;
width: 400px;
height: 300px;
border-radius: 15px 50px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
cursor: pointer;
transition: 0.4s;
}

.card .card_image {
width: inherit;
height: inherit;
border-radius: 40px;
}

.card .card_image img {
width: inherit;
height: inherit;
border-radius: 40px;
object-fit: cover;
}

.card .card_title {
text-align: center;
border-radius: 0px 0px 40px 40px;
font-family: sans-serif;
font-weight: bold;
font-size: 17px;
margin-top: -80px;
height: 40px;
}

.card:hover {
transform: scale(0.9, 0.9);
box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
-5px -5px 30px 15px rgba(201, 181, 181, 0.22);

}

@media all and (max-width: 500px) {
.card-list {
/* On small screens, we are no longer using row direction but column */
flex-direction: column;
}
}




/* Slideshow */
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 50   s;
  animation-name: fade;
  animation-duration: 50s;
}

@-webkit-keyframes fade {
  from {opacity: 10} 
  to {opacity: 30   }
}

@keyframes fade {
  from {opacity: 10} 
  to {opacity: 30   }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}



  
</style>
</head>
<body>

    <header>
        <div class="navbar-fixed ">
         <nav class="nav-wrapper blue">
          
             <div class="container">
              <a href="index.php"><img src="images/1609250789282.png" title="First Response" width="300px" height="65px"/></a>
                 <a href="#" data-target="mobile-links" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                     <li><a class="white-text text-darken-4" href="index.php">Home</a> </li>
                     <li><a class="white-text text-darken-4" href="About.php">About Us</a> </li>
                     <li><a class="white-text text-darken-4" href="hospital.php">Hospitals Nearby</a> </li>
                     <!-- <li><a class="white-text text-darken-4" href="#foot">About</a> </li> -->
                     
                 </ul>
             </div>
             
         </nav>
     </div>
     </header> 
     
     <ul class="sidenav" id="mobile-links">
         <li><a class="black-text text-darken-4" href="index.php">Home</a> </li>
         <li><a class="black-text text-darken-4" href="About.php">About Us</a> </li>
         <li><a class="black-text text-darken-4" href="hospitals.php">Hospitals Nearby</a> </li>
                         
     </ul> 