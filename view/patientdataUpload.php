<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/calculation.css">
    <title>Upload Patient Data</title>
</head>
<body>
    <h1>Upload Patient Data</h1>
    <form action="../controller/process_patient_data.php" method="post" enctype="multipart/form-data">
        <label for="csvfile">Select CSV File:</label>
        <input type="file" name="csvfile" id="csvfile" accept=".csv">
        <br>
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>
