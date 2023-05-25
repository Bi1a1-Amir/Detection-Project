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
              <li class="nav1"><a href="../view/homepage.php">Home</a></li>
              <li class="nav2"><a href="../controller/calculator.php">Calculate eGFR</a></li>
              <li class="nav3"><a href="https://www.kidney.org/kidney-basics">Know about your Kidney</a></li>
              <li><a href="../view/aboutus_view.php">About Us</a></li>
          </ul>
      </nav>
      <a class="btm" href="../controller/login.php"><button>Login/Sign-Up</button></a>
  </header>

    <h1 class="startpage">Revised Bedside Schwartz Formula Calculator</h1>

    <form action="../controller/kidcalculator.php" method="post">
    <label class="entertl" for="height">Height (cm): </label>
    <input type="number" id="height" class="old" name="height"><br>
    <br>
    <label class="entertl" for="scr">Serum Creatinine (mg/dL): </label>
    <input type="number" id="scr" class="old" name="scr"><br>
    <br>
    <label class="entertl" for="age">Age (years): </label>
    <input type="number" id="age" class="old" name="age"><br>
    <br>
    <label class="entertl" for="gender">Gender: </label>
    <select class="old" id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>
    <br>  
    <button type="submit">Calculate eGFR</button>
    </form>
    <?php if($result !== null): ?>
        <p class="calc"><?php echo $result; ?>mL/min/1.73 m²</p>
    <?php endif; ?>
