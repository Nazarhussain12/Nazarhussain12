

<!DOCTYPE html>
<html>
<head>
    <title> Kidflix  </title>
    <link rel="shortcut icon" href="k.ico">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <img src="./image1/bg1.png" class="logo"></img>
            <div class="navbtn">
                
             <button  class="lang"><img src="./image1/united-kingdom.png"></img>
                English<img src="./image1/down-arrow.png"></img>
                <div class="lang-dropdown">
                    <div class="lang-dropdown-item">اُردو</div>
                    <div class="lang-dropdown-item">French</div>
                    <div class="lang-dropdown-item">German</div>
                    <div class="lang-dropdown-item">Chinese</div>
                </div>
            
            </button>
            <button class="signup1" id="signInBtn">
                Sign Up
            </button>
            </div>
        </div>

        <div class="content">
            <h1 class="head1">Unlimited Animated movies, TV shows, and more.</h1>
            
            <h2 class="head2">Popular Movies & TV Shows</h2><br>
            <h3 class="head2">If you have signed up already. Get start by your registered email</h3>
            <!-- Content thumbnails go here -->
            <!---- <form class="signup" action="Kidflix.php" method="post">
                <input type="email" name="email" placeholder="Email Address" required>
                <button type="submit">Get Started</button>
            </form>
        -->
      <!-- ... -->
<form class="signup" action="login.php" method="post">
    <input type="email" name="email" placeholder="Email Address" required>
    <button class="getstart" type="submit">Get Started</button>
</form>
<!-- ... -->


        
        </div>
    </div>
<br><br><br><br><br>
<div class="features">

<div class="row">
<div class="text_col">
    <h2 class="h3">
        Enjoy on Your TV.
    </h2>
    <p class="h4">
       Watch on Smart TVs, PlayStation, Xbox, Chromecast, AppleTV,
        Blu_ray Players and more. 
    </p>

</div>
<div class="img_col">
    <img src="./image1/tv.png" alt="2nd">
</div>
</div>

<br><br><br><br><br><br><br>

<div class="row">
    <div class="img_col">
        <img src="./image1/kids.png" alt="2nd">
    </div>
    <div class="text_col">
        <h2 class="h5">
            Create Profiles for the Kids.
        </h2>
        <p class="h6">
           Send kids on the adventures with their favorite character in a space 
           made just for them. 
        </p>
    
    </div>
   
    </div>


    <br><br><br><br><br><br><br>


    <div class="row">
        <div class="text_col">
            <h2 class="h7">
                Watch on your Anroid & Iphone Now.
            </h2>
            <p class="h8">
                Save your favorites easily and always have something to watch. 
            </p>
        
        </div>
        <div class="img_col">
            <img src="./image1/pic.jpg" alt="2nd">
        </div>
        </div>



        <br><br><br><br><br><br><br>


</div>

    <div class="footer">
        <br><br><br><br><br><br><br>
        <h3> Questions? Call +92 3035231963</h3>

        <div class="row">
            <div class="col">
            <a href="#">FAQ</a>
            <a href="#">Investor Rekations</a>
            <a href="#"> Privacy</a>
             <a href="#">Speed Test</a>
        </div>

        <div class="col">
            <a href="#">Help Center</a>
            <a href="#">Jobs</a>
            <a href="#"> cookies prefrences</a>
             <a href="#">Legal Notices</a>
        </div>


        <div class="col">
            <a href="#">Account</a>
            <a href="#">Ways to Watch</a>
            <a href="#">Corporate Information</a>
             <a href="#">Only on Netflix</a>
        </div>


        <div class="col">
            <a href="#">Media Center</a>
            <a href="#">Terms of Use</a>
            <a href="#"> Contact US</a>
           
        </div>


    </div>
        <p>&copy; 2023 Kidflix Nazar Hussain</p>
        <br><br><br><br><br><br><br>
    </div>

<!-- Sign In Modal -->
<!-- ... rest of your HTML ... -->

<!-- Sign In Modal -->
<div id="signinModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form action="register.php" method="post">
    <input type="text" id="username" name="username" placeholder="Username" required>
    <input type="email" id="email" name="email" placeholder="Email" required>
    <input type="password" id="psw" name="psw" placeholder="Password" required>
    <input type="password" id="psw-confirm" name="psw-confirm" placeholder="Confirm Password" required>
    <button type="submit">Sign Up</button>
</form>

    </div>
</div>

<!-- ... rest of your HTML ... -->

<script>
    // JavaScript code for modal

    // Get the modal
    var modal = document.getElementById('signinModal');

    // Get the button that opens the modal
    var signInBtn = document.getElementById('signInBtn');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal 
    signInBtn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }






    document.addEventListener('DOMContentLoaded', () => {
  const elements = document.querySelectorAll('.head1, .head2, .h3 , .h4, .h5, .h6, .h7,.h8');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      } else {
        entry.target.classList.remove('is-visible');
      }
    });
  }, {
    threshold: 0.1
  });

  elements.forEach(element => {
    observer.observe(element);
  });
});



</script>
<?php
    if(isset($_GET["email"])) {
        echo "<p>Account registered for " . htmlspecialchars($_GET["email"]) . "</p>";
    }
    ?>
    
</body>
</html>