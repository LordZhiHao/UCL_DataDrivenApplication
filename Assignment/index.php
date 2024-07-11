<?php

// The test variable is commented out once it is being used to check if the file is working. 
// $test = "hello world";
//echo $test."<hr>";

// connect to the database set
include("php_connect/DB_connect.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/indexPage.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/jquery_lib.js"></script>


<script>
$(document).ready(function(){ 
  
  // this alert is updated in order to acknowledge the user that the webpage is ready to be used. 
  alert("Website is Loaded and Ready to Go!");
	
}); 
</script>

</head>

<body>

<div id="container">

<!-- This is the header for the page. I changed its contents for more context -->
<div id="header"> 
  <p id="welcomeText">Welcome to UCL: The Home Page</p>

<!-- Links are being placed on the header for more conciseness and better ui interface in my opinion -->
  <div class="right-links">
  <button id="userListBtn">
    <a href="registrationSuccess.php">Check User List</a>
  </button>  
  <button id="registerBtn">
    <a href="registrationPage.php">Register Now!</a>
  </button>  
  </div>
</div>

<!-- This is the header for the page. I changed its contents for more context -->
<div id="content">

<!-- For more fun, I decided to include a quiz about UCL in the introduction page. This quiz is powered by jquery to display the answer once toggled -->
    <button id="quizBtn">
      <p id="question">What notable historical figure was involved in the founding of University College London (UCL)?</p>
    </button>

  <script>
        $(document).ready(function() {
            var toggle = true;
            $("#quizBtn").click(function() {
                if (toggle) {
                    $("#question").html('<p id="question">University College London (UCL) was founded in 1826 under the leadership of Jeremy Bentham, a philosopher and social reformer known for his advocacy of utilitarianism and his proposal of the principle of the panopticon.</p>');
                } else {
                    $("#question").html('<p id="question">What notable historical figure was involved in the founding of University College London (UCL)?</p>');
                }
                toggle = !toggle; // Switch the toggle state
            });
        });
  </script>
</div>
	
<!-- end content div-->

<!-- This is the Footer for the page, it is changed to give more context to the interface -->
<div id="footer"> 
 © Copyright UCL 2024 ©
</div>

<!-- end container div-->
</div>
                               
</body>             
</html>             
                    