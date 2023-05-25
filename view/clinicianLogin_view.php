<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/calculation.css"> <!-- link to style sheet  -->
  <title>Login Page</title>
</head>
<body>
  <header>
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
  <h1 class="startpage">Clinician Login</h1>
  <form action= "../controller/clinicianLogin.php" method="POST"> <!--input of form goes to login.php file, post used to submit data from form to server-->
    <p>
      <label for="username" class="lbl">Username</label>
      <input name="userName" type="text" class="old">
    </p>
    <p>
      <label for="password" class="lbl">Password</label>
      <input name="password" type="password" class="old">
    </p>
    <button type="submit" name="login">Login</button>
    <br>  
  </form> 
  </main>
</body>
</html>
