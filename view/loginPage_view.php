<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/login.css"> <!-- link to style sheet  -->
  <title>Login Page</title>
</head>
<body>
<img class="bottom-image" src="../assets/Clinician.png" alt="My Image">
  <header>
  <img class="logo" src="../assets/CKD Logo.png" alt="log for CKD">
    <nav>
        <ul class="nav_links">
              <li class="nav1"><a href="../view/homepage.php">Home</a></li>
              <li class="nav2"><a href="../controller/calculator.php">Calculate eGFR</a></li>
              <li class="nav3"><a href="https://www.kidney.org/kidney-basics">Know about your Kidney</a></li>
              <li><a href="../view/aboutus_view.php">About Us</a></li>
        </ul>
    </nav>
  </header>
  <main>
  <h1 class="startpage">Login to get started to track!</h1>
  <div class="inputcontainer">
  <form action= "../controller/login.php" method="POST"> <!--input of form goes to login.php file, post used to submit data from form to server-->
    <p>
      <label for="username" class="lbl">Username</label>
      <input name="userName" type="text" class="old">
    </p>
    <p class="password">
      <label for="password" class="lbl">Password</label>
      <input name="password" type="password" class="old">
    </p>
    </div>
    <div class="loginsign">
    <button class="b1" type="submit" name="login">Login</button>
    </form>
    </div>  
  <div class="buttongroup">
  <form action="../controller/signup.php">
            <button class="b3" type="submit" name= "guest">Sign up</button>
    </form> 
  <form action="../controller/clinicianLogin.php">
            <button class="b4" type="submit" name= "clinician">Log in as clinician</button>
  </form>  
  <form action="../controller/calculator.php">
            <button class="b2" type="submit" name= "guest">Guest Login</button>
  </form> 
  </div>
  </main>
</body>
</html>
