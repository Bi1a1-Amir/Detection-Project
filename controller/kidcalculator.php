<?php
session_start();
require_once '../model/dataAccess.php';

$result = null;

if(isset($_POST['height']) && isset($_POST['scr']) && isset($_POST['age']) && isset($_POST['gender'])) {
    // get the form data
    $height = $_POST['height'];
    $scr = $_POST['scr'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if($height != '' && $scr != '' && $age != '' && $gender != '') {
        $result = NewCalculate_eGFR($height, $scr, $age, $gender);
    } else {
        $result = 'Please fill all fields.';
    }
}
require_once '../view/kidcalculatorView.php';
?>