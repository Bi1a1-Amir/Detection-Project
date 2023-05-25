<?php
require_once '../model/dataAccess.php'; // Include the file with your PDO connection and functions

if (isset($_FILES['csvfile']) && $_FILES['csvfile']['error'] == UPLOAD_ERR_OK) {
    $filename = $_FILES['csvfile']['tmp_name'];
    $file = fopen($filename, "r");

    // Read and process the CSV file
    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
        // CSV columns firstName, lastName, dateOfBirth, email, NHS_number, userName, password
        $firstName = $data[0];
        $lastName = $data[1];
        $dateOfBirth = $data[2];
        $email = $data[3];
        $NHS_number = $data[4];
        $userName = $data[5];
        $password = $data[6];

        // Call the newPatient function to insert the patient data into the database
        newPatient($firstName, $lastName, $dateOfBirth, $email, $NHS_number, $userName, $password);
    }

    fclose($file);
    echo "Patient data has been uploaded and stored successfully.";
} else {
    echo "There was an error uploading the file. Please try again.";
}
?>
