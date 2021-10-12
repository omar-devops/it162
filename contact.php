<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Omurbek Mamasaliev's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1>Omurbek's Contact Form</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Omurbek</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
     <img class="desktop" src="image/desktop.jpg" alt="Riding the horse" />
       
     <img class="tablet" src="image/tablet.jpg" alt="Uludag ski resort" />
       
     <img class="phone" src="image/phone.jpg" alt="Hiking" />
         <main class = "wrapper" style="display: inline-grid;">
        <h2 class = "subheader"> Contact Omar</h2>
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "omur.mamasaliev@gmail.com";  //place your/your client's email address here
        $toName = "Jason"; //place your client's name here
        $website = "Contact form test";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Omurbek Mamasaliev</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
</main>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>