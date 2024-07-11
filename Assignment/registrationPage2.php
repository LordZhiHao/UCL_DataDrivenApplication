<?php
if(isset($_REQUEST['user_Id'])) { $user_Id =$_REQUEST['user_Id']; }
else { $user_Id=0; }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/registrationPage2.css">
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
	
  // An alert is being sent to the user in the case that the submit button is being clicked. This alerts the user that they are submitting the form
$('#next_address').click(function(){
	alert("Submit button clicked, Submitting Address...");
});
	
});

</script>

</head>

<body>

<div class="ui-datepicker-multi" id="container">

<!-- This is the header for the page. I changed its contents for more context -->
<div id="header"> 
  <p id="welcomeText">Welcome to UCL: The Registration Page 2</p>  
<!-- Links are being placed on the header for more conciseness and better ui interface in my opinion -->
  <button id="homeBtn">
    <a href="index.php">Home Page</a>
  </button>  
</div>

<!-- This is the content for the page. In order to make it look more appealing, I changed the form layout from a table to a normal form -->
<div id="content">
  <form action="php_files/uploadAddressToDB.php" method="post" enctype="multipart/form-data" id="inputForm">
    <div class="inputField">
      <label for="house_numberName">House Name: </label>
      <input type="text" name="house_numberName" id="house_numberName" autocomplete="off" val="Didnt Log"/>
    </div>

    <div class="inputField">
      <label for="street_name">Street Name: </label>
      <input type="text" name="street_name" id="street_name" autocomplete="off" val="Didnt Log"/>
    </div>
    
    <div class="inputField">
      <label for="city">City : </label>
      <input type="text" name="city" id="city" autocomplete="off" val="Didnt Log"/>
    </div>

    <div class="inputField">
      <label for="postCode">Post Code : </label>
      <input type="text" name="postCode" id="postCode" autocomplete="off" val="Didnt Log"/> <br>
    </div>

    <div class="inputField submitBtn">
      <input name="next_address" type="submit" id="next_address" value="Submit" val="register">
      <input type="text" name="user_Id" id="user_Id" value="<?php echo $user_Id; ?>"/>
    </div>
  </form>

</div>

<!-- This is the footer for the page. I changed its contents for more context -->
<div id="footer">
© Copyright UCL 2024 ©
</div>

</div>             
<div id="loadAgeCalc"></div>                 
                                 
</body>             
</html>             
                    