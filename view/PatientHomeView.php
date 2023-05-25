<!DOCTYPE html>
<html>
  <head>
    <title>eGFR Calculation</title>
    <link rel="stylesheet" href="../style/homepage.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  </head>
  <body class="something">
    <!-- This is the nav bar -->
    <header class="navbar">
      <img class="logo" src="../assets/CKD Logo.png" alt="log for CKD">
      <nav>
          <ul class="nav_links">
              <li class="nav1"><a href="../controller/PatientHome.php">Home</a></li>
              <li class="nav2"><a href="../controller/patientDash.php">Calculate eGFR</a></li>
              <li class="nav3"><a href="https://www.kidney.org/kidney-basics">Know about your Kidney</a></li>
              <li class="nav4"><a href="../controller/previousResults.php">Previous Results</a></li>
              <li class="nav5"><a href="../controller/PatientAboutUs.php">About Us</a></li>
          </ul>
      </nav>
      <a class="btm" href="../controller/logout.php"><button>Log out</button></a>
  </header>

  <div class="banner">
    <div class="banner-text">
      <h1>Manage Your CKD now!</h1>
      <p>In the UK, 3.5 million people have Chronic Kidney Disease (CKD), with uncontrolled diabetes and high blood pressure being the biggest causes. Over 68,000 people in the UK are currently being treated for kidney failure, and there are 40-45,000 premature deaths every year due to CKD. Black, Asian, and minority ethnic communities are five times more likely to develop CKD. Every day, 20 people in the UK develop kidney failure, and there are around 1,000 children with CKD in the UK. Because of this calculate your eGFR today!</p>
      <br>
      <a class="btn" href="../controller/patientDash.php"><button>Calculate Your CKD Stage Today!</button></a>
    </div>
    <img class="bannerimg" src="../assets/banner.png" alt="Banner Image">
  </div>

  <main>
    <div class="container">
      <div class="box">
        <h2>What is CKD?</h2>
        <p>Chronic Kidney Disease (CKD) is a long-term condition in which the kidneys do not work properly. It can cause a wide range of symptoms and can eventually lead to kidney failure.</p>
        <br>
        <a class="learnbtn" href="https://www.nhsinform.scot/illnesses-and-conditions/kidneys-bladder-and-prostate/chronic-kidney-disease#:~:text=Chronic%20kidney%20disease%20(CKD)%20is,by%20blood%20and%20urine%20tests."><button>Learn More</button></a>
      </div>
      <div class="box">
        <h2>How to Control CKD?</h2>
        <p>There are many ways to control CKD, including lifestyle changes, medication, and regular check-ups with a doctor. By following a healthy lifestyle and managing your symptoms, you can improve your quality of life.</p>
        <br>
        <a class="learnbtn" href="https://www.niddk.nih.gov/health-information/kidney-disease/chronic-kidney-disease-ckd/managing"><button>Learn how to manage</button></a>
      </div>
      <div class="box">
        <h2>Get Involved</h2>
        <p>Help fight Chronic Kidney Disease (CKD) by making a donation today. With your support, vital research and patient care can be funded to make a real difference in the lives of those affected by this condition. Join the fight against CKD and donate now.</p>
        <a class="learnbtn" href="https://support.kidney.org/give/464210/#!/donation/checkout?utm_source=kidney.org&utm_medium=website&utm_content=hero&utm_campaign=2023_national_kidney_month&c_src=NKM23Hero"><button>Donate Now!</button></a>
      </div>
    </div>


    <div class="table-container">
      <h1 class="ckd">Stages of CKD</h1>
      <table>
        <thead>
          <tr>
            <th>Stage</th>
            <th>eGFR (ml/min/1.73m2)</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>≥ 90</td>
            <td>Normal kidney function but urine tests or imaging abnormality present</td>
          </tr>
          <tr>
            <td>2</td>
            <td>60-89</td>
            <td>Mildly reduced kidney function</td>
          </tr>
          <tr>
            <td>3</td>
            <td>30-59</td>
            <td>Moderately reduced kidney function</td>
          </tr>
          <tr>
            <td>4</td>
            <td>15-29</td>
            <td>Severely reduced kidney function</td>
          </tr>
          <tr>
            <td>5</td>
            <td>&lt; 15</td>
            <td>Kidney failure</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>