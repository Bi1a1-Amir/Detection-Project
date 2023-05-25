<!doctype html>
<html>
    <head>
    <title>Patient List</title>
    <link rel="stylesheet" href="../style/previousresults.css">
    </head>
    <header class="navbar">
      <img class="logo" src="../assets/CKD Logo.png" alt="log for CKD">
      <nav>
          <ul class="nav_links">
              <li class="nav1"><a href="../controller/ClinicHome.php">Home</a></li>
              <li class="nav2"><a href="../controller/clinicianDash.php">Calculate eGFR</a></li>
              <li class="nav3"><a href="https://www.kidney.org/kidney-basics">Know about your Kidney</a></li>
              <li class="nav4"><a href="../controller/patientInfo.php">Patient info</a></li>
              <li class="nav5"><a href="../controller/clinicAbout.php">About Us</a></li>
          </ul>
      </nav>
      <a class="btm" href="../controller/logout.php"><button>Log out</button></a>
    </header>
    <body>
    <form method="post" action="../controller/patientInfo.php">
        <h2 class="lbl">Search by patientId:</h2>
        <input class="old" name="search"/>
        <button type="submit" value="search">Search</button> 
    </form> 
    <br>
    <form action="../controller/patientInfo.php">
            <button type="submit" name= "back">All Patients</button>
    </form>
    <br>
    <br>
    <main>
    <div class="table-container">
    <table class="table">
            <thead>
                <tr>
                    <th class="tbl-header">Patient ID</th>
                    <th class="tbl-header">first Name</th>
                    <th class="tbl-header">last Name</th>
                    <th class="tbl-header">Email</th>
                </tr>
            </thead>
                    <tbody>
                        <?php foreach ($patients as $patient): ?>
                            <tr>
                                <td class="tbl-info"><?=$patient->patientId ?></td>
                                <td class="tbl-info"><?=$patient->firstName ?></td>
                                <td class="tbl-info"><?=$patient->lastName ?></td>
                                <td class="tbl-info"><?=$patient->email ?></td>
                            </tr>
                        <?php endforeach ?>
            </table>
            <br>
        <table>
            <thead>
                <tr>
                    <th class="tbl-header">eGFR</th>
                    <th class="tbl-header">Stage</th>
                </tr>
            </thead>
                    <tbody>
                        <?php foreach ($results as $result): ?>
                            <tr>
                                <td class="tbl-info"><?=$result->egfr ?></td>
                                <td class="tbl-info"><?=$result->stage ?></td>
                            </tr>
                        <?php endforeach ?>
        </table>
    </div>
    <main>   
    </body>
</html>