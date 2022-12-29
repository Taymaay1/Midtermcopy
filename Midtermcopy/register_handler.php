<?php

// Here we will handle the pizza order form
// GET server variable in PHP $_GET
// POST server variable in PHP $_POST

//var_dump($_POST);

//Set default values up here
$hasErrors = false;
 $priceList = array();
$priceList["visa"] = 10;
 $priceList["master"] = 15;
 $priceList["credit"] = 20;

 $errorMsg = "";


$priceList = array(
 'visa' => 10,
 'master' => 15,
 'credit' => 20
);


// Test if the user submited a first name
if (isset($_POST['firstname']) && ($_POST['firstname'] != "") ) {
  $firstName = $_POST['firstname'];
} else {
  $hasErrors = true;
   $errorMsg .= "<p>First name is required</p>";
}

if (isset($_POST['lastname']) && ($_POST['lastname'] != "")) {
  $lastName = $_POST['lastname'];
} else {
  $hasErrors = true;
  $errorMsg .= "<p>Last name is required</p>";

}

if (isset($_POST['address']) && ($_POST['address'] != "") ) {
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone_number'];
  $payment = $_POST['payment'];


} else {
  $hasErrors = true;
    $errorMsg .= "<p>Address is required</p>";

}

 // echo "Iniial ".$orderTotal."<br>";

if (isset($_POST['payment']) && ($_POST['payment'] != "") ) {
  $payment = $_POST['payment'];
} else {
  $hasErrors = true;
}


// Final step
if($hasErrors) {
  // die("You have errors.");
  include('becomeastreamer2.php');
} else {
  include('include/db.php');

  $sql = "INSERT INTO `register` (`id`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone_number`, `payment_option`) VALUES (NULL, '$firstName', '$lastName', '$address', '$city', '$state', '$zip', '$phone', '$payment')";
// Perform the query
mysqli_query($con, $sql);
//echo("Error description: " . mysqli_error($con));

// Print auto-generated id
//echo "New record has id: " . mysqli_insert_id($con);

mysqli_close($con);

  //echo "No errors<br>";

  mysqli_close($con);
  //Redirect the user to another page
  header("location: musiclibrary5.php");
  
}



?>
