<?php

require('../php_connect/DB_connect.php');

//grab postdat values for creating user row
$user_Id = $_REQUEST['user_Id'];
$house_numberName = $_REQUEST['house_numberName'];
$street_name = $_REQUEST['street_name'];
$city = $_REQUEST['city'];
$postCode = $_REQUEST['postCode'];

//insert the postdata into the database
$sql = "INSERT INTO `address` 
(`address_Id`,`user_Id`,`house_numberName`,`street_name`,`city`,`postCode`) 
VALUES (NULL, '$user_Id','$house_numberName','$street_name','$city','$postCode')";

//bug finder
if ($conn->query($sql) === TRUE) { 
//test for insertion if/else
//echo "New record created successfully";
//pause the program to make sure that the database is updated 
sleep(0.5);	

	
//find the last user ID to carry across to the address upload php page.
//constrain the result to the user details just uploaded 
/*$query = "SELECT `user_Id` FROM `users` 
WHERE `firstname`='$firstName'
AND `lastName`='$lastName'
AND `dob`='$mysqldate'
ORDER BY `users`.`user_Id` DESC LIMIT 1";*/
	
//output data of each row
//save the query result array in the result variable
//$result = $conn->query($query);

//loop through the array to fetch the user ID 
/*while ($row = $result->fetch_row()) {
    $user_Id = $row[0];
}*/
echo "jobs a goodun"; 

//if all ok load the address page with the user ID as post data
header("Location:../registrationSuccess.php?user_Id=".$user_Id."&message=ADDRESS AND NAME LOGGED");	
//else throw an error
} else { echo "Error: ".$sql."<br>".$conn->error; }

//close the database link
$conn->close();

//varible test script 
/*echo 
	"<hr>first name ".$firstName."<br>".
	"last name ".$lastName."<br>".
	"date of birth ".$dob."<br>".
	"age ".$age,"<br>";

echo "you've submitted the form";*/
?>