<?php 
require_once ("../model/clinician.php");  // for clinician class access
require_once ("../model/dataAccess.php");


if (isset($_REQUEST["userName"]) && isset($_REQUEST["password"])) // condition to check if username and password are set
    {
        $user = $_REQUEST["userName"];    // requesting values from the form of the web page
        $password = $_REQUEST["password"];  

        $clinician = ClinicianlogIn(($user),($password)); // calling the login function with the values set above

        if ($clinician != null)
        {
            header("Location: ../controller/clinicianDash.php"); /* Redirect browser to homepage*/
        }
        else
        {
            echo '<span style="color:red; font: size 500px; animation: shake 1s;">try again</span>';
        }
    }

 require_once("../view/clinicianLogin_view.php");

?>