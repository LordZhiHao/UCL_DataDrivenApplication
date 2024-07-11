<?php
// This is to check if PHP is working successfully on this page. It has been commented out once we verified the process
// echo "This is the Registration page";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/registrationPage.css">
<link href="css/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">	
<link href="css/validate.css" rel="stylesheet" type="text/css">	
  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>-->
<script type="text/javascript" scr="js/jquery.ui-1.10.4.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery_lib.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slider.js"></script>	
<script type="text/javascript" src="js/validator.js"></script>	
	
	
<script>
$(document).ready(function(){	

// An alert is being sent to the user in the case that the proceed button is being clicked. This alerts the user that they are proceeding to the next page
$('#next_address').click(function(){
	alert("Proceed button clicked, Proceed to next page!");
});
	
});

</script>

</head>

<body>

<div class="ui-datepicker-multi" id="container">

<!-- This is the header for the page. I changed its contents for more context -->
<div id="header"> 
  <p id="welcomeText">Welcome to UCL: The Registration Page</p>  
<!-- Links are being placed on the header for more conciseness and better ui interface in my opinion -->
  <button id="homeBtn">
    <a href="index.php">Home Page</a>
  </button>  
</div>

<!-- This is the content for the page. In order to make it look more appealing, I changed the form layout from a table to a normal form -->
<div id="content">
	<form action="php_files/uploadToDB.php" method="post" enctype="multipart/form-data" id="inputForm">
    <div class="inputField">
      <label for="firstName">First Name</label>
      <input type="text" name="firstName" id="firstName" autocomplete="off" val="Didnt Log"/>
    </div>

    <div class="inputField">
      <label for="lastName">Last Name</label>
      <input type="text" name="lastName" id="lastName" autocomplete="off" val="Didnt Log"/>
    </div>
    
    <div class="inputField">
      <label for="newdate">Date of Birth</label>
      <input name="newdate" type="text" id="newdate" val="Didnt Log"/>

      <script>
      // Initialise datepicker
      $(document).ready(function(){
        $("#newdate").datepicker(
          {
            dateFormat: "dd-mm-yy",
            changeDay: true,
            changeMonth: true,
            changeYear: true,
            yearRange: "-80:+00"
          }
        );
      });
      </script>

    </div>

    <div class="inputField">
      <label for="age">Age</label>
      <input type="number" name="age" id="age" autocomplete="off" val="Didnt Log"/> <br>
    </div>

    <div class="inputField submitBtn">
      <input name="next_address" type="submit" id="next_address" value="Proceed" val="register">
    </div>
  </form>

</div>
<div id="loadAgeCalc"></div>    

<!-- This is the footer for the page. I changed its contents for more context -->
<div id="footer">
© Copyright UCL 2024 ©
</div>
</div>             
             
                    
                    
</body>             
</html>             
                    