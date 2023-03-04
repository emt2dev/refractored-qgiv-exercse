<?php
/* HEADERS */
header('X-Frame-Options: DENY'); // prevents iframes

/* SESSION STARTS */
if(!isset($_SESSION)) {
    session_start();
} else {
    session_start();
}

/* this file stores all session information. */
$_SESSION['base_url'] = 'http://localhost/exercisedavidduron/';
$_SESSION['base_assets'] = 'http://localhost/exercisedavidduron/includes/assets/';
$_SESSION['base_products'] = 'http://localhost/exercisedavidduron/includes/assets/uploads/products/';
$_SESSION['base_controllers'] = 'http://localhost/exercisedavidduron/includes/controllers/';
$_SESSION['base_models'] = 'http://localhost/exercisedavidduron/includes/models/';
$_SESSION['base_db'] = 'http://localhost/exercisedavidduron/includes/dbSession/db.php';


// $__db[] array
$__db[0] ="localhost"; // server
$__db[1] ="root"; // user
$__db[2] =""; // pass
$__db[3] ="exercisedavidduron"; //db name

// Create our database connection
$connection = new mysqli($__db[0], $__db[1], $__db[2], $__db[3]);

// Ensure our database connection works
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// here, we ensure remove login attempt errors
if (isset($_SESSION['no_user_found'])) {
    unset($_SESSION['no_user_found']);
  }
  
  if (isset($_SESSION['incorrect_password'])) {
    unset($_SESSION['incorrect_password']);
  }

  /*** HERE WE INCLUDE OUR CUSTOM METHODS AND OUR MODELS ***/
  // Methods
  include 'includes/config/components/methods/sanitizer.php'; // here we include of sanitizer method
  include 'includes/config/components/methods/getAPI.php'; // here we include of sign in method

  // Classes
  include 'includes/config/models/backend/userModel.php'; // here we include our new user model

?>
