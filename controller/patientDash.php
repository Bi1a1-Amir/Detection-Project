<?php
session_start();
require_once '../model/dataAccess.php';

$result = null;

if (isset($_POST['creatinine'], $_POST['age'], $_POST['gender'], $_POST['race'])) {
    $creatinine = $_POST['creatinine'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $race = $_POST['race'];

    $result = calculateEGFR($creatinine, $age, $gender, $race);

    $patientId = $_SESSION['patientId'];
    save_result($patientId, $result['egfr'], $result['stage']);

}
require_once '../view/patientDash_view.php';
?>