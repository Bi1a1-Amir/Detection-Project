<!doctype html>
<html>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="../style/table.css"> -->
        <link rel="stylesheet" href="../style/previousresults.css">
    <title>Previous results</title>
    </head>
    <header class="navbar">
      <img class="logo" src="../assets/CKD Logo.png" alt="log for CKD">
      <nav>
          <ul class="nav_links">
              <li class="nav1"><a href="../controller/PatientHome.php">Home</a></li>
              <li class="nav2"><a href="../controller/patientDash.php">Calculate eGFR</a></li>
              <li class="nav3"><a href="https://www.kidney.org/kidney-basics">Know about your Kidney</a></li>
              <li class="nav4"><a href="../controller/previousResults.php">Previous Results</a></li>
              <li><a href="../controller/PatientAboutUs.php">About Us</a></li>
          </ul>
      </nav>
      <a class="btm" href="../controller/logout.php"><button>Log out</button></a>
    </header>
    <body>
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
    </body>
</html>