<?php 
session_start();
require_once '../model/dataAccess.php';
require_once "../model/result.php";

if (isset($_SESSION['patientId'])) {

    $patientId = $_SESSION['patientId'];
    $results = getPreviousResults($patientId);
    require_once '../view/previousResults_view.php';
}

?>