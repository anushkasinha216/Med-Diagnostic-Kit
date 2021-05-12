<?php
  session_start();
?>
<html land = "eng">
<head>
  <meta charset = "UTF-8" />
  <meta name = "viewport" content = "width=device-width, initial scale = 1.0">
  <link href = "https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" rel = "icon" type = "image/x-icon" />
  <link rel = "apple-touch-icon" size = "64x64" href = "https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" />
  <link rel = "apple-touch-icon" sizes = "180x180" href = "https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" />
  <meta name = "msapplication-square70x70logo" content = "https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" />
  <meta name = "msapplication-square150x150logo" content = "https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" />
  <meta name = "msapplication-square310x310logo" content = "https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" />
  <meta name = "msapplication-wide310x150logo" content = "https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" />
  <meta name = "msapplication-TileColor" content = "black" />
  <meta name="description" content="Symptoms|Cause|Treatement" />
  <meta name = "robots" contex = "index, follow, max-snippet: -1, max-image-preview: large, max-video-preview: -1" />
  <link rel="canonical" href="https://www.meddiokit.com/" />
  <meta property = "og:locale" content = "en" />
  <meta property = "og:type" content = "website" />
  <meta property = "og:title" content = "Check yourself up with Med Diagnostic Kit" />
  <meta property = "og:description" content = "A kit which estimates the disease by the symptoms and recommends treatment." />
  <meta property = "og:url" content = "https://www.meddiokit.com/" />
  <meta property = "og:site_name" content = "Med Diagnostic Kit" />
  <meta property = "og:image" content="https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/medical-logo.jpg" />
  <meta property = "og:image:width" content = "600" />
  <meta property = "og:image:height" content = "600" />
  <link rel = "stylesheet" href = "medkit.css" type = "text/css" media = "screen,print,all" />
  <link rel = "stylesheet" href = "signup101.css" type = "text/css" media = "screen,print,all" />
  <link rel = "stylesheet" href = "login101.css" type = "text/css" media = "screen,print,all" />
  <title> Medical Diagnostic Kit </title>
</head>
<body>
   <div class = "container">
     <header class = "cf site">
        <div class = "branding logo">
        <a href = "/medkit.php" title = "Med Diagnostic Kit">
          <img id = "img1" class = "c1" src = "Med Diagnostic Kit.png" width = "400px" height = "110px" /> <br> <br>
        </a>
        </div>

        <div class = "topnav">
          <nav id = "main-nav">
            <ul class = "c2">
            <li> <a href = "/medkit.php#About" id = "i101"> <span> About </span> </a> </li>
            <li> <a href = "https://symptomate.com/diagnosis/#0-66" id = "i101"> <span> Test </span> </a> </li>
            <li> <a href = "/medkit.php#tandc" id = "i101"> <span> Terms and Condition </span> </a> </li>
            <li id = "sign" onclick = "document.getElementById('id101').style.display = 'block'" style="width: auto;"> <span> Sign UP </span> </li>
            <div id = "id101" class = "modal">
              <span onclick= "document.getElementById('id101').style.display = 'none'" class = "close" title = "Close Modal">&times;</span>
              <form class = "modal-content" action = "signup.inc.php" method = "post">
                <div class="imgcontainer1">
                  <img id = "image1" src="https://www.pngitem.com/pimgs/m/33-332471_image-library-stock-boy-svg-kid-child-avatar.png" alt="Avatar" class="avatar1">
                </div>
                <div class = "container1">
                  <h1> Sign Up </h1>
                  <p> Please fill in this form to create an account. </p>
                  <hr>
                  <label for="first-name"> <b> First Name </b> </label> <br> <br>
                  <input type="text" placeholder="Enter Fisrt Name" name="first-name" required> <br> <br>

                  <label for="last-name"> <b> Last Name </b> </label> <br> <br>
                  <input type="text" placeholder="Enter Last Name" name="last-name" required> <br><br>

                  <label for="gender"> <b> Select Your Gender: </b> </label>
                  <select id="gender1" name = "gender" required>
                     <option value="Male"> Male </option>
                     <option value="Female"> Female </option>
                     <option value="ND"> Prefer NoT To Say </option>
                  </select> <br><br> <br>

                  <label for="date-of-birth "> <b> Date of Birth: </b> </label>
                  <input type="date" id="dob1" name="date-of-birth" required> <br><br> <br>

                  <label for="username"> <b> Username </b> </label>
                  <input type="text" placeholder="Enter username" name="uid" required> <br><br>

                  <label for = "email"> <b> Email </b> </label> <br> <br>
                  <input type = "text" placeholder = "Enter Email" name = "email" required> <br> <br>

                  <label for = "psw"> <b> Enter Password </b> </label> <br> <br>
                  <input type = "password" placeholder = "Enter Password" name = "psw" required> <br> <br>

                  <label for = "psw-repeat"> <b> Repeat Password </b> </label> <br> <br>
                  <input type = "password" placeholder = "Repeat Password" name = "psw-repeat" required> <br>

                  <label>
                  <input type = "checkbox" checked = "checked" name = "remember" style = "margin-bottom:15px"> Remember me
                </label>
                <p> By creating an account you agree to our <a href = "#" style = "color: dodgerblue"> Terms & Privacy </a>. </p>
                <div class = "clearfix">
                  <button type = "button" onclick = "document.getElementById('id101').style.display = 'none'" class = "cancelbtn"> Cancel </button>
                  <button type = "submit" name = "submit1" class = "signupbtn"> Sign Up </button>
                </div>
              </div>
              <?php
                if(isset($_GET["error"])){
                  if($_GET["error"] == "emptyinput"){
                    echo "<p> Fill in all fields! </p>";
                  }
                  else if($_GET["error"] == "invaliduid"){
                    echo "<p> Choose a proper username! </p>";
                  }
                  else if($_GET["error"] == "invalidemail"){
                    echo "<p> Choose a proper email! </p>";
                  }
                  else if($_GET["error"] == "passwordsdontmatch"){
                    echo "<p> Password's doesn't match! </p>";
                  }
                  else if($_GET["error"] == "stmtfailed"){
                    echo "<p> Something went wrong, try again! </p>";
                  }
                  else if($_GET["error"] == "usernametaken"){
                    echo "<p> Username already taken! </p>";
                  }
                  else if($_GET["error"] == "none"){
                    echo "<p> You have signed up! </p>";
                  }
                }
              ?>
            </form>
            </div>
            <script>
            var modal = document.getElementById('id101');
            window.onclick = function(event) {
            if(event.target == modal) {
              modal.style.display = "none";
            }
            }
            </script>
            <li id = "log" onclick = "document.getElementById('id102').style.display = 'block'" style = "width: auto;"> <span> Log In </span>  </li>
            <div id = "id102" class = "modal2">
              <span onclick= "document.getElementById('id102').style.display = 'none'" class = "close2" title = "Close Modal2">&times;</span>
              <form class = "modal-content2" action = "login.inc.php">
                <div class = "imgcontainer2">
                   <img id = "image2" src = "https://www.pngitem.com/pimgs/m/33-332471_image-library-stock-boy-svg-kid-child-avatar.png" alt = "avatar" class = "avatar">
              </div>
              <div class = "container2">
                <hr>
                <label for = "uname"> <b> Username </b> </label>
                <input type = "text" placeholder = "Username/Email" name = "uname" required>

                <label for = "psw"> <b> Password </b> </label>
                <input type = "password" placeholder = "Enter Password" name = "psw" required>

                <label>
                  <input type = "checkbox" checked = "checked" name = "remember"> Remember me
                </label>
              </div>
              <div class = "container2" style = "background-color: #f1f1f1">
                <button type = "button" onclick = "document.getElementById('id102').style.display = 'none'" class = "cancelbtn2"> Cancel </button>
                <button type = "submit" name = "submit" class = "loginbtn"> Login </button>
                <span class = "psw"> <a href = "#"> Forgot password? </a> </span>
              </div>
              <?php
                if(isset($_GET["error"])){
                  if($_GET["error"] == "emptyinput"){
                    echo "<p> Fill in all fields! </p>";
                  }
                  else if($_GET["error"] == "wronglogin"){
                    echo "<p> Incorrect login information! </p>";
                  }
                }
              ?>
            </form>
            </div>
            <script>
            var modal2 = document.getElementById('id102');
            window.onclick = function(event){
              if(event.target == modal2){
                modal2.style.display = "none";
              }
            }
            </script>
          </ul>
          </nav>
        </div>
    </header>
