<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/signup.css"> <!-- link to style sheet  -->
  <title>Login Page</title>
</head>
<body>
<img class="bottom-image" src="../assets/Clinician.png" alt="My Image">
  <header>
  <img class="logo" src="../assets/CKD Logo.png" alt="log for CKD">
    <nav>
        <ul class="nav_links">
              <li class="nav1"><a href="../view/homepage.php">Home</a></li>
              <li class="nav2"><a href="../view/calculator_view.php">Calculate eGFR</a></li>
              <li class="nav3"><a href="">Know about your Kidney</a></li>
              <li><a href="../view/aboutus_view.php">About Us</a></li>
        </ul>
    </nav>
  </header>
  <main>
  
  <head>
    <title>Sign Up</title>
    </head>
    <header>
        <h1 class="startpage">Sign Up</h1>
    </header>
    <form action="../controller/signup.php" method="POST">  
        <p>

        <label class="lbl" for="first-name">First Name:</label>
        <input class="old" type="text" id="firstName" name="firstName" autocomplete="off" required pattern="[A-Za-z]+" title="Please enter a valid first name (letters only)">

        </p>

        <p>
        <label class="lbl" for="last-name">Last Name:</label>
        <input class="old" type="text" id="lastName" name="lastName" required pattern="[A-Za-z]+" title="Please enter a valid last name (letters only)">
        </p>

    <p>
        <label class="lbl" for="date-of-birth">Date of Birth:</label>
        <input class="old" type="date" id="date0fBirth" name="dateOfBirth" required>
    </p>    

    <p>
        <label class="lbl" for="email">Email:</label>
        <input class="old" type="email" id="email" name="email" required>
    </p>    

    <p>
        <label class="lbl" for="NHS_Number">NHS Number:</label>
        <input class="old" type="text" id="NHS_Number" name="NHS_Number">
    </p>

    <p>
        <label class="lbl" for="username">Username:</label>
        <input class="old" type="text" id="userName" name="userName" autocomplete="off" required>
    </p>

    <p>
        <label class="lbl" for="password">Password:</label>
        <input class="old" type="password" id="password" name="password" autocomplete="off" required>
    </p>    

        <button class="b1" type="submit" id="submit" name="submit">Create account</button>
        <br></br>
    </form>
    <form action="../controller/login.php">
            <button class="b2" type="submit" name= "login">Login</button>
    </form>    

  </main>
</body>
</html>







