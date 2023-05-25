<?php
    $pdo = new PDO("mysql:host=localhost;dbname=ckd",
    $username = "CKD",
    $password = "abc123",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
   
    function getAllPatients() 
    {
        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM patient");
        $statement->execute();
        $results = $statement->fetchALL(PDO::FETCH_CLASS,"patient");
        return $results;
    }
    function getAllResults() 
    {
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM result");
    $statement->execute();
    $results = $statement->fetchALL(PDO::FETCH_CLASS,"result");
    return $results;
    }
    function getPatientBypatientId($patientId)
    {
        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM patient WHERE patientId = ?");
        $statement->execute([$patientId]);
        $results = $statement->fetchAll(PDO::FETCH_CLASS,"patient");
        return $results;
    }
    function logIn($userName,$password){ ## login function

        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM patient WHERE patient.userName = ?"); ## checks database for for values
        $statement->execute([$userName]); ## binds the parameter values to the placeholders
        $result = $statement->fetchObject('patient'); ## retrieves the result object
        if ($result && password_verify($password, $result->password)){
            return $result;
        }else {
            return false;
        }
    }

    function ClinicianlogIn($userName,$password){ ## login function

        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM clinician WHERE clinician.userName = ? AND clinician.password = ?"); ## checks database for for values
        $statement->execute([$userName,$password]); ## binds the parameter values to the placeholders
        $result = $statement->fetchObject('clinician'); ## retrieves the result object
        return $result;

    }

    function newPatient($firstName, $lastName, $dateOfBirth, $email, $NHS_number, $userName, $password)
{
    global $pdo;

    $type = array('cost' => 12);
    $securePassword = password_hash($password, PASSWORD_BCRYPT, $type);

    $sql = "INSERT INTO patient (firstName, lastName, dateOfBirth, email, NHS_number, userName, password) 
        VALUES (:firstName, :lastName, :dateOfBirth, :email, :NHS_number, :userName, :password)";
    $statement = $pdo->prepare($sql);

    $statement->bindParam(':firstName', $firstName);
    $statement->bindParam(':lastName', $lastName);
    $statement->bindParam(':dateOfBirth', $dateOfBirth);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':NHS_number', $NHS_number);
    $statement->bindParam(':userName', $userName);
    $statement->bindParam(':password', $securePassword);

    $statement->execute();
 
}
function calculateEGFR($creatinine, $age, $gender, $race)
{
    $umol = $creatinine / 88.4;

    // eGFR calculation
    $egfr = 0;
    if ($gender === "M" && $race === "NB") {
        $egfr = 186 * (pow($umol, -1.154)) * (pow($age, -0.203));
    } else if ($gender === "M" && $race === "B") {
        $egfr = 186 * (pow($umol, -1.154)) * pow($age, -0.203) * 1.210;
    } else if ($gender === "F" && $race === "NB") {
        $egfr = 186 * (pow($umol, -1.154)) * (pow($age, -0.203)) * 0.742;
    } else if ($gender === "F" && $race === "B") {
        $egfr = 186 * (pow($umol, -1.154)) * (pow($age, -0.203)) * (0.742) * 1.210;
    }

    $stage = "";
    $imgSrc = "";
    if ($egfr >= 90) {
        $stage = "Normal or high GFR";
        $imgSrc = "../assets/Stage 1 .png";
    } else if ($egfr >= 60) {
        $stage = "Mildly reduced GFR";
        $imgSrc = "../assets/Stage 2.png";
    } else if ($egfr >= 30) {
        $stage = "Moderately reduced GFR";
        $imgSrc = "../assets/Stage 3.png";
    } else if ($egfr >= 15) {
        $stage = "Severely reduced GFR";
        $imgSrc = "../assets/Stage 4.png";
    } else if ($egfr >= 0) {
        $stage = "Kidney failure";
        $imgSrc = "../assets/Stage 5.png";
    }

    return [
        'egfr' => round($egfr, 2),
        'stage' => $stage
    ];
}
function NewCalculate_eGFR($height, $scr, $age, $gender) {

    // check if input values are valid
    if (!is_numeric($height) || $height <= 0) {
        return "Error: Invalid height value";
    }
    if (!is_numeric($scr) || $scr <= 0) {
        return "Error: Invalid serum creatinine value";
    }
    if (!is_numeric($age) || $age <= 0) {
        return "Error: Invalid age value";
    }

    // calculate GFR using the Schwartz formula
    $k = 0.413;
    if ($gender == 'F') {
        $k = $k * 0.85;
    }
    $gfr = ($k * $height) / $scr;

    // adjust for age
    $age_coef = 1;
    if ($age <= 1) {
        $age_coef = 0.33;
    } elseif ($age > 1 && $age <= 13) {
        $age_coef = 1;
    } elseif ($age > 13 && $age <= 18) {
        $age_coef = 0.75;
    }
    $gfr = $gfr * $age_coef;

    return round($gfr);
}




function save_result($patientId,$egfr,$stage)
{
    global $pdo;

    $sql = "INSERT INTO result (patientId, egfr, stage) VALUES (:patientId, :egfr, :stage)";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':patientId', $patientId);
    $statement->bindParam(':egfr', $egfr);
    $statement->bindParam(':stage', $stage);

    $statement->execute();
}


// <=========This is for egfr calculation for children===================>>






function getPreviousResults($patientId) 
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM result WHERE patientId = :patientId");
    $statement->bindParam(':patientId', $patientId);
    $statement->execute();
    $results = $statement->fetchALL(PDO::FETCH_CLASS,"result");
    return $results;
}
function getResultBypatientId($patientId)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM result WHERE patientId = ?");
    $statement->execute([$patientId]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"result");
    return $results;
}
?>
