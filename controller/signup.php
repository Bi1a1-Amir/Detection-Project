<?php
require_once("../model/patient.php");
require_once("../model/dataAccess.php");


if (isset($_POST['submit'])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $email = $_POST["email"];
    $NHS_Number = $_POST["NHS_Number"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    newPatient($firstName,$lastName,$dateOfBirth,$email,$NHS_Number,$userName,$password);
}
require_once("../view/signup_view.php");
?>