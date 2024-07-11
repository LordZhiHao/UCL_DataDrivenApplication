<?php

//$user_Id = $_REQUEST['user_Id'];
// user Id sent from previous page, could be used to identify user for more functionality

if(!empty($_REQUEST['message'])){
$message = $_REQUEST['message'];
} else { $message = ""; }

include("php_connect/DB_connect.php");

//constrain the result to the user details just uploaded 
$sql = "SELECT `firstName`, `lastName`, `dob`, `age`, `house_numberName`, `street_name`, `city`, `postCode` FROM `users` left join `address` ON `users`.`user_Id` = `address`.`user_id` ORDER BY `address_Id` DESC";
	
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/registrationSuccess.css"/>
<script src="js/jquery_lib.js"></script>


<script>
$(document).ready(function(){
	
	 /*-console.log( "ready! I tell you" );
	$("tr:even").click(function() { alert("hi you") });*/
	// $("tr:odd").css({"background-color": "red", "color": "white"});
	$("#navBack").click(function() { location.href = 'registrationPage.php' });
	
	$('#truncateBtn').click(function(){ 
		alert("Emptying Database...");
	    $('#trucateTable').load("php_files/emptyTables.php");
	});

	$('#registerBtn').click(function(){ 
		alert("Going to Register Page...");
	    location.href = "registrationPage.php";
	});
	// $('#homeLink').click(function(){ location.href = 'index.php' });

}); 
</script>

</head>

<body>

<div id="container">

<!-- This is the header for the page. I changed its contents for more context -->
<div id="header"> 
  <p id="welcomeText">Welcome to UCL: User List Page</p>  
<!-- Links are being placed on the header for more conciseness and better ui interface in my opinion -->
  <button id="homeBtn">
    <a href="index.php">Home Page</a>
  </button>  
</div>

<!-- This is the content for the page. For better design, I decided to change the orientation and design of the buttons. The format of the table is also updated for better ui in my opinion -->
<div id="content">

	<div id="udpateDetails">
      <button id="truncateBtn">Empty Database</button>
	  <div id="trucateTable">
		<?php ?>
	  </div>	
	  <button id="registerBtn">Register Now!</button>
	</div>

<?php
	echo "<table border=\"1\" align=\"center\" cellspacing=\"10\" id=\"contactTable\">
<thead>
  <tr>
    <th colspan=8 id='userRegisterDisplay'> USERS REGISTERED</th>
  </tr>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>D.O.B.</th>
    <th>Age</th>
    <th>House Name/no</th>
    <th>Street Name</th>
    <th>City</th>
    <th>Post Code</th>
  </tr>
</thead>
<tbody>";

while ($row = mysqli_fetch_array($result)){
echo 
"
<tr>
  <td>".$row['firstName']."</td>
  <td>".$row['lastName']."</td>
  <td>".$row['dob']."</td>
  <td>".$row['age']."</td>
  <td>".$row['house_numberName']."</td>
  <td>".$row['street_name']."</td>
  <td>".$row['city']."</td>
  <td>".$row['postCode']."</td>
</tr>";
}
echo "</tbody></table>";
?>

</div>

<!-- This is the footer for the page. I changed its contents for more context -->
<div id="footer">
© Copyright UCL 2024 ©
</div>

</div>
                                    
</body>             
</html>             
                    