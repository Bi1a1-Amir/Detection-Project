<!DOCTYPE html>
<html>
  <head>
    <title>eGFR Calculation</title>
    <link rel="stylesheet" href="../style/calculation.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  </head>
  <body>

    <!-- This is the nav bar -->
    <img src="../assets/woman-doctor-white-coat-holding-calculator-pointing-removebg-preview.png" alt="My Image" id="bottom-corner-image">
    <header class="navbar">
      <img class="logo" src="../assets/CKD Logo.png" alt="log for CKD">
      <nav>
          <ul class="nav_links">
                <li class="nav1"><a href="../controller/ClinicHome.php">Home</a></li>
                <li class="nav2"><a href="../controller/clinicianDash.php">Calculate eGFR</a></li>
                <li class="nav3"><a href="https://www.kidney.org/kidney-basics">Know about your Kidney</a></li>
                <li class="nav5"><a href="../controller/patientInfo.php">Patient Info</a></li>
                <li class="nav4"><a href="../controller/clinicAbout.php">About Us</a></li>
          </ul>
      </nav>
      <a class="btm" href="../controller/logout.php"><button>Log out</button></a>
  </header>

    <h1 class="startpage">Calculate eGFR</h1>
    <!-- <h1 class="startpage">What is eGFR?</h1> -->
    <!-- <h2 class="info">Glomerular filtration rate (GFR) is the best overall index of kidney function. Normal GFR varies according to age, sex, and body size, and declines with age. The National Kidney Foundation recommends using the CKD-EPI Creatinine Equation (2021) to estimate GFR. </h2> -->

    <form action="../controller/clinicianDash.php" method="post">
        <h2 for="creatinine"class="entertl">Creatinine (umol/l):</h2>
        <input type="number" id="creatinine" class="crtn" name="creatinine" >
        <br>
        <h2 for="age"class="entertl">Age (years):</h2>
        <input type="number" id="age" class="crtn" name="age" >
        <br>
        <h2 class="radiotitle">Gender:</h2>
        <input type="radio" id="male" class="radiobtn" name="gender" value="M" >
        <label for="male"class="lbl">Male</label>
        <input type="radio" id="female" class="radiobtn" name="gender" value="F" >
        <label for="female"class="lbl">Female</label>

        <h2 class="radiotitle">Ethnicity:</h2>
        <input type="radio" id="nonblack" name="race" value="NB" >
        <label for="nonblack" class="lbl">Non-black</label>
        <input type="radio" id="black" name="race" value="B" >
        <label for="black" class="lbl">Black</label>
        <br>
        <br>
        <button type="submit">Calculate eGFR</button>
        <br>
        <a class="btm" href="../view/kidcalculatorView.php"><button>Use the Pediatric eGFR Calculator</button></a>
        <button type="submit" name="clear">Clear</button>
    </form>
    <?php if ($result !== null): ?>
    <div id="result">
    <img id="img" src="<?php echo $imgSrc; ?>" alt="eGFR stage image">
        <p class="calc">eGFR: <?= number_format($result['egfr'], 2) ?> mL/min/1.73 m²</p>
        <p class="calc">Stage: <?= $result['stage'] ?></p>
    </div>
    <?php endif; ?>

    <body>
    <h1 class="upload">Upload Patient Data</h1>
    <form action="../controller/process_patient_data.php" method="post" enctype="multipart/form-data">
        <label for="csvfile">Select CSV File:</label>
        <input type="file" name="csvfile" id="csvfile" accept=".csv">
        <br>
        <input class="btm" type="submit" value="Upload" name="submit">
    </form>
</body>

</body>
</html>