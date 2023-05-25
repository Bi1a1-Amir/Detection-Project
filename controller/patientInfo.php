<?php
    require_once "../model/patient.php";
    require_once "../model/result.php";
    require_once "../model/dataAccess.php";

    if (isset($_POST["search"]))
    {
        $search = $_POST["search"];
        $patients = getPatientBypatientId($search);
        $results = getResultBypatientId($search);
    }
    else {
        $patients = getAllPatients();
        $results = getAllResults();
    }    
 require_once "../view/patientInfo_view.php";
?>