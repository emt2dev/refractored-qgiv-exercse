<?php
$routing = strtolower($_SERVER['REQUEST_URI']);

/* THE FOLLOWING LOGS OUT ANY USER TYPE */
if ($routing == '/exercisedavidduron/?logout=true') {
    if ($_GET['logout'] == 'true') {
        session_destroy();
        unset($_SESSION);
        
        header('Location: http://localhost/exercisedavidduron/');
        exit();
        }
}
    /* includes the html head section and our css*/
    include 'includes/assets/html/heading.html';

    switch ($routing) {

        /* This is our landing page */
        case '/exercisedavidduron/':
            
            /* Here we load the home, story, icons sections */
        //     include 'includes/assets/html/forms/login.html'; // Introduction of the company
        //     break;
        
        // case '/exercisedavidduron/dashboard':
            
            include 'includes/assets/html/tables/transactions.html'; // populates register page
            include 'includes/config/components/tables/transactions.php'; // populates login page
            break;
    
        // case '/exercisedavidduron/register':
        //     include 'includes/assets/html/forms/register.html'; // populates register page
        //     break;

        case '/exercisedavidduron/transaction':
            include 'includes/config/components/transaction.php'; // populates register page
            break;

        case '/exercisedavidduron/profile':
            include 'includes/config/components/profile.php'; // populates register page
            break;
        
        
        /*
        THIS SECTION WE USE IF THE USER ATTEMPTS TO ACCESS OUR .php file extensions,
            - this is secondary to our .htaccess files
        */
        
        // case '/exercisedavidduron/register.php':
        //     header('Location: http://localhost/exercisedavidduron/register');
        //     exit();
        //     break;

        /* END PHP SECURITY */

        default:
            echo'404... Page not found!';
            break;
      }
      
      echo "</div>";
      include 'includes/assets/html/footing.html'; //  footer section

?>