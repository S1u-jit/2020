<!DOCTYPE html>
<html>
<head>
  <script src="jquery-3.4.1.min.js"></script>
  <link href="css/floating-totop-button.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <style>
    ul{
   list-style-type: none;
   border-right: 5px dotted black;
   }
 
  ul:last-child{
     border-right: none;
    }
    .submit{
      width: 100%;
      position: relative;
  border-radius: 50%;
  background-color: blue;
  color: white;
  font-weight: bold;

    }
  /*  .submit:before{
     content: "";
   position: absolute;
   top:0%;
   bottom:0%;
   left:0%;
   right:0%;

  height: 120vh;
  color:red;
   border-radius: 50%;
      */  
/*    }*/
    .submit:hover{
  
 /*   color: blue;*/
  
     z-index: 1;
    border-radius: 100%;
    background-color: black;
      

    }
    .col-lg-6{
       display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .col-md-3{
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    body{

      background-color: #718093;
    }
    .top{
      margin-top: 5rem;
    }
  
/*.paralax .parallax_R{
  -webkit-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
-moz-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
box-shadow: 0 8px 6px -6px black;
}*/
    
    .bag:before{
      background: linear-gradient(160deg,#16c9f6 55%,#fff 0%);
      /*-ms-transform: rotate(20deg); *//* IE 9 */
/*  transform: rotate(20deg);*/ 
   content: "";
   position: absolute;
   top:0%;
   bottom:0%;
   left:0%;
   right:0%;
  z-index: -1;
  height: 120vh;

    }
      .bagg:before{
    background: linear-gradient(160deg,rgba(0,212,255,1) 39%, #9c88ff 0% );
      /*-ms-transform: rotate(20deg); *//* IE 9 */
/*  transform: rotate(20deg);*/ 
   content: "";
   position: absolute;
   top:0%;
   bottom:0%;
   left:0%;
   right:0%;
  z-index: -1;}
    .bag,.bagg{
       height: 100vh;
       width: 100%;
       position: relative;
       margin-top: 0px;
    }
    .bag{
      margin-top: 0px;
      height: 120vh;
       width: 100%;
    }
    .bagg{
      /*margin-top: 12px;*/
    }
    .field_set{
      /*border-color: #;*/
      border-style: 5px solid #ffffff;
      z-index: 1;

    }
    
/*.container{
  border-radius: 50% !important;
}*/

    .parallax {
      /* The image used */
      background-image: url("image/slide1.jpg");

      /* Set a specific height */
      min-height: 500px; 

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
     text-align: center;
     justify-content: center;
     align-items: center;
     display: flex;
      -webkit-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
-moz-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
box-shadow: 0 8px 6px -6px black;
     border-radius: 25px 25px 25px 25px;

    }
    .parallax_R{
       /* Set a specific height */
      min-height: 500px; 

      /* Create the parallax scrolling effect */
    /*  background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
     text-align: center;
     justify-content: center;
     align-items: center;
     display: flex;
    -webkit-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
-moz-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
box-shadow: 0 8px 6px -6px black;*/
/* border-radius: 25px 25px 25px 25px;*/


    }
    .parallax:hover{
        box-shadow: 0 8px 6px -0.3px black;
      transform: translate(0, -10px);
      background-color: red;
      transition: 4s;
      transition-timing-function: linear;
    }
    .parallax_R{
        box-shadow: 0 8px 6px -0.3px black;
      /*transform: translate(0, -10px);*/
    /*  background-color: red;*/
      transition: 2s;
      transition-timing-function: linear;
    }
    .input-container {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }

    .icon {
      padding: 10px;
      background: dodgerblue;
      color: white; 
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
    }

    .input-field:focus {
      border: 2px solid dodgerblue;
    }

    /* Set a style for the submit button */
    .btn {
      background-color: dodgerblue;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .btn:hover {
      opacity: 1;
    }
  </style>

  <title>

  </title>
<?php
  include 'link/links.php';
  ?>
</head>
<body >
  <nav class="navbar navbar-expand-lg navbar-dark  pl-5" style="box-shadow: 0 4px 8px 0 rgba(1, 0, 0.9, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.6);position: sticky ; top:0; z-index: 1; background: linear-gradient(120deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 39%, rgba(0,212,255,1) 95%);">
    <a class="navbar-brand  " href="#" style="padding: 5px;">COVID-19 </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5">
        <li class="nav-item active mr-3  ">
          <a class="nav-link color" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-3 ">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link " href="#health">Check Your Health</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link " href="#contact">Contact Us</a>
        </li>
      </ul>


    </div>
  </nav>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 360px; "  style="position: absolute; z-index: 1;background-color: white;"> 
    <div class="carousel-inner" style="height: 360px;">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid height: auto; " src="image/slide1.jpg " alt="First slide" style="height: 150%; filter: blur(2px);">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid  height: auto;" src="image/slide2.jpg" alt="Second slide" style="height: 100%; filter: blur(2px);">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid  height: auto;" src="image/slide3.jpg" alt="Third slide" style="height: 100%; filter: blur(2px);">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section id="about" >
    <h1 style="text-align: center;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;color:white;font-family: 'Roboto', sans-serif;
font-family: 'Girassol', cursive;">What Is Corona virus</h1>
    <div class="container">
    <div class="row cone" style="margin-top: 3rem;">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xl-6 ">
        
<img src="image/abc.png" width="300px" height="50px" class="img-fluid">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-6 col-xl-6 cot">
       <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available. Excepte</p>
      </div>


    </div>
  </div>


  </section>
     


<!--  <div> <h1 style="align-items: center;text-align: center;margin-top:8rem;font-size: 2rem;font-family: 'Girassol', cursive;color: white;
 text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">What is Corona Virus</h1>
<div style="/*margin-top: 12rem;*/height: 100vh ;background-color:white">
  <div class="container" style="height: 250px">
  <div class="left_w">
    <img src="image/abc.png" width="200px" height="200px" style="float: left;">
  </div>
  <div class="right_w" style="float:left;"><div style="float: left;"><p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</div>
    </p>
  </div>
     <img src="image/abc.png" width="200px" height="200px" style="float: right;">
  </div>
  </div>
  
</div>
</div>
 --> <div class="bag">
<?php
include 'Symptoms.php';

?>
</div>
<div class="bagg">
<?php
include 'prevention.php';

?>
</div>
<!--New Section--->  
<section id="health">
<div class="container " style="font-family: 'Roboto', sans-serif;
font-family: 'Girassol', cursive;    background:#8c03f46b" >


    <form action="/action_page.php">
  <h2 style="text-align: center" style="font-family: 'Roboto', sans-serif;
font-family: 'Girassol', cursive;">Check Your Health Status</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter Your Name" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
   <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="number" placeholder="Age" name="Age" min="0" max="100">
  </div>

</div>

<div class="container" style=" display: flex;align-items: center;justify-content:space-around;text-align: center; width: 100%">


  <label style=>Gender</label>
    <label class="radio">
      <input type="radio" name="optradio" checked><span>Male</span>
    </label>
    <label class="radio-inline" >
      <input type="radio" name="optradio" ><span>Female</span>
    </label>
    <label class="radio-inline"><span>
      <input type="radio" name="optradio">Others</span>
    </label>

</div>

<div class="container" style=" margin-top: 25px;text-align: center; line-height: 25px;font-family: 'Roboto', sans-serif;
font-family: 'Girassol', cursive;"><h1 style="">Have You Symptoms</h1>
  <div style="margin-top: 25px;">
<!--New Section-->
 <label class="radio-inline" >
      <input type="checkbox" name="optradio" checked>Fever
    </label>
    <label class="radio-inline" >
      <input type="checkbox" name="optradio" >Cough
    </label>
    <label class="radio-inline">
      <input type="checkbox" name="optradio">Shortnees Of Breathing
    </label>
    
</div>



</div>
<div class="container">
<input type="submit" name="submit" style="padding: 5px" class="submit">
</div>
</form>
</div>
</section>

  <div class="card position" style="background-image: url('covid.jpg');
  height: 180px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
/*  position: relative;
*/  opacity: ;
  z-index: -1;
  text-align:center;
  display: flex;
  justify-content: center;
 
  background-color:white;
  margin-top: 12rem;
  ">

   <div class="color" style="font-family: 'Roboto', sans-serif;
font-family: 'Girassol', cursive; color: white;margin-top: 25px;
 text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">
    <h1 style=" ;">Prevention <span>Is</span> Better Than Cure</h1>

  </div>

</div>
<div class="container" id="contact" style="box-shadow: 0 4px 8px 0 rgba(1, 0, 0.9, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
  text-align: center;
 
  background-color:#2f3640;">
  <div class="row" style="border-right: 5px solid blue ;display: flex;justify-content: center;text-align: center;align-items: center; top:50;right:50;opacity: 1;color: white;
 text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">
    <div class="col-sm-4 col-lg-4 col-md-4">
      <h1> World</h1>
     <ul  >
       <li>World Status</li>
       <li> India Status</li>
       <li> odisha Status</li>

     </ul>
  </div>
  <div class="col-sm-4 col-lg-4 col-md-4">
    <h1>External Sites</h1>
    <ul>
       <li style="opacity: 1!important;">Home</li>
       <li>About Corona</li>
       <li>jumpt To MHA</li>

     </ul>
  </div>
  <div class="col-sm-4 col-lg-4 col-md-4">
    <h1> Contact Me</h1>
   <ul>
       <li style="opacity: 1!important;">Home</li>
       <li>About Corona</li>
       <li>About Corona</li>

     </ul>
  </div>
    
  </div>
</div>
<div class="mt-3 " style="width: 100% ;text-align: center;" >
  <div class="col-lg-12 col-md-12" >
    <p style=" color:yellow;background-color:blue; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"> Desgined and Devloped By Sujit  &copy;2020</p>
  </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery.marquee.js"></script>
<script>
$('#demo').marquee();({
/**//*4. Options and defaults.*/



// enable the plugin
enable : true,  //plug-in is enabled

// scroll direction
// 'vertical' or 'horizontal'
direction: 'vertical',

// children items
itemSelecter : 'li', 

// animation delay
delay: 3,

// animation speed
speed: 1,

// animation timing
timing: 1,

// mouse hover to stop the scroller
mouse: true

});  
</script>
<script src="/path/to/cdn/jquery.min.js"></script>
<script src="js/floating-totop-button.js"></script>
<script type="text/javascript">
 
  $("body").toTopButton({
   backgroundColor: 'blue'
 });
</script>
</body>




</html>