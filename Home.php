<?php
session_start(); // This should be the very first line
// ... rest of your Home.php code ...
?>



<!-- Your existing HTML continues here -->



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kidflix</title>
<link rel="shortcut icon" href="k.ico">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<!-- Add your CSS here -->
<style>
  html {
  scroll-behavior: smooth;
}
.hidden {
  display: none !important;
}
a{
  text-decoration: none;
}
  .movie-slider {
  margin: 20px 0;
}

.movie-slider div {
  margin-right: 10px;
  text-align: center;
}

.movie-title {
  color: white;
  font-size: 16px;
  margin-top: 8px; 
}

.slick-slide img {
  border-radius: 4px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  width: 100%;
  transition: transform .2s;

}

.slick-slide:hover img {
  transform: scale(1.1);
}

.slick-prev:before, .slick-next:before {
  color: rgb(0, 0, 0,);
  transform: scale(1.2);
  
}
.movie-slider img {
  height: 350px; /* or any other fixed height */
  width: 100%; /* this will make the width responsive to the container size */
  object-fit: cover; /* this will make sure that images cover the area nicely */
  border-radius: 4px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

/* Fix for the slick slider arrows overlapping */
.slick-prev,
.slick-next {
  z-index: 1;
   /* Adjust the size as needed */
  color: rgb(249, 249, 249); /* Change the color as needed */
  position: absolute;
  top: 50%; /* Center vertically */
  z-index: 2; /* Ensure they are above the images */
  transform: translateY(-50%);
  font-size: px; /* Smaller font size */
  transform: scale(1.8); 
  
}

.slick-prev {
  left: 10px; /* Adjust distance from the left edge */
}

.slick-next {
  right: 25px; /* Adjust distance from the right edge */
}
.hero-image {
  position: relative;
  height: 100vh; /* Adjust the height as necessary, using vh for viewport height */
  overflow: hidden;
  /* Hide the overflow to maintain the aspect ratio of the video */
}
.top-bar {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
}

.logo {
  height: 100px; 
  width: 150px;/* Adjust as needed */
}
.logo:hover{
  transform: scale(1.2);
}

.menu-right {
  display: flex;
  align-items: center;
}
.search-button:hover{
  transform: scale(1.1);
}
.search-button {
  /* Style your search button */
  margin-right: 20px; 
  background: #fafafa;
  border: 0;
  border-radius: 40px;
  outline: 0;
  color: #000000;
  font-size: 16px;
  cursor: pointer;
  text-decoration: none;
  padding: 10px 20px 10px 40px;
  background-image: url('icons8-search.svg'); /* Path to your icon */
  background-repeat: no-repeat;
  background-position: 10px center; /* Adjust as needed */
  background-size: 35px 35px; /* Spacing between search and menu */
}

.three-dot-menu {
  position: relative;
  display: inline-block;
  cursor: pointer; /* Changes the cursor on hover */
  padding: 8px; /* Adds some padding around the icon for easier clicking */
  border-radius: 50%; /* Optional: makes the button circular */
  transition: background-color 0.3s; /* Smooth transition for background color */
}

.three-dot-menu:hover {
  background-color: rgba(255, 255, 255, 0.2);
  transform: scale(1.2); /* Changes background color on hover */
}

.three-dot-menu button {
  background: none;
  border: none;
  color: white; /* Set the color of the dots */
  font-size: 24px; /* Adjust the size of the dots */
  display: flex;
  align-items: center;
  justify-content: center;
  height: 24px; /* Ensures the button has a fixed size */
  width: 24px;
}

/* Hide the default browser styling */
.three-dot-menu button:focus {
  outline: none;
}

/* Menu content styling */
.three-dot-menu .menu-content {
  display: none;
  position: absolute;
  top: 40px;
  right: 0;
  background-color: #f9f9f9;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 4px; /* Optional: rounded corners for the dropdown */
}

.three-dot-menu .menu-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition: background-color 0.2s; /* Smooth transition for hover effect */
}

.three-dot-menu .menu-content a:hover {
  background-color: #757575;
  color: white;
}


.three-dot-menu:hover .menu-content {
  display: block;
}

#heroVideo {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  object-fit: cover; /* This will ensure that your video covers the entire div */
  z-index: -1; /* Make sure the video stays in the background */
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.hero-image::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7));
  z-index: 0; /* Between the video and the text */
}

.hero-text {
 
  position: absolute;
  top: 16%; /* Center vertically */
  left: 20%; /* Center horizontally */
  transform: translate(-50%, -50%); /* Adjust position to true center */
  color: rgb(249, 249, 249);
  z-index: 1; /* Ensure text is above the video */
  text-align: center;
  font-size: 40px;
  opacity: 0;
  transition: opacity 0.6s ease-out;
  will-change: opacity, transform;
}
.hero-image {
  /* ... existing styles ... */
  position: relative; /* Ensure the parent is positioned relatively */
}
.is-visible {
  animation: fadeInUp 0.9s ease-out forwards;
}
#scrollButton {
  margin-top: 1px; /* Space above the button */
  padding: 10px 20px;
  background-color: #db0001; /* Example color */
  color: white;
  border: none;
  border-radius: 40px;
  font-size: 25px;
  font-family:monospace;
  cursor: pointer;
  transition: background-color 0.3s;
  text-decoration: none;
}

#scrollButton:hover {
  
  background-color: #a30000;
   /* Darker shade on hover */
}



.search-overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  z-index: 3;
}

.search-input {
  position: absolute;
  top: 20%;
  left: 50%;
 
  transform: translate(-50%, -50%);
  width: 40%;
  padding: 10px;
  font-size: 20px;
  border-radius: 50px;
  border: none;
}
.row
{
    display: flex;
    width: 100%;
    align-items: center;
    flex-wrap: wrap;
    padding: 50px 0;

}.text_col{
    flex-basis: 50%;
    margin-bottom: 20px;
}

.footer{
    padding: 50px 15% 10px;
    border-top: 6px solid #333;
    color: #777;
    
}
.footer h2{
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 30px;

}
.footer .col{
    flex-basis: 25%;
    flex-grow: 1;
    margin-bottom: 20px;
}
.footer .col a{
    display: block;
    text-decoration: none;
    color: #777;
    font-size: 14px;
    margin-bottom: 10px;

}
.footer .row{
    align-items: flex-start;
    padding: 10px 0;
}
.footer h3{
    text-decoration: none;
}



/* Class to apply blur effect */

</style>

</head>
<body style="background-color: black; color: white;">

  <div class="hero-image">
    <div class="top-bar">
      <img src="bg1.png" alt="Logo" class="logo">
      <div class="menu-right">
        
        <a href="#targetSection" class="search-button" id="search-button">Explore</a>
        <div class="three-dot-menu">
          <button>•••</button>
          <div class="menu-content">
            <a href="#settings">Settings</a>
            <a href="Kidflix.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <video autoplay muted loop id="heroVideo">
      <source src="./movies/films.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="hero-text">
      <h1>Welcome to Kidflix</h1>
      <p>Stream your favorite cartoons and family shows</p>
      <a href="#targetSection" class="scrollButton" id="scrollButton">Explore</a>

    </div>
  </div>
  
  <div class="search-overlay" id="searchOverlay">
    <input type="text" class="search-input" id="searchInput" placeholder="Search...">
  </div>
  









<div class="Popular movies" id="targetSection">
  <h2>Popular Movies</h2>
  <div class="movie-slider">
    <!-- Repeat this block for each movie -->
    <a href="movie.php?id=1">
    <div class="movie-container">
        <div class="movie" data-title="Anime">
          <img src="./movies/image/umberalla.jpg" alt="Movie Title">
          <p class="movie-title">Umbrella</p>
        </div>
    </div> 
    </a>
<a href="movie.php?id=2">
    <div class="movie-container">
    <div class="movie" data-title="Elemental">
      <img src="./movies/0-1-13.jpg" alt="Elemental">
      <p class="movie-title">Elemental</p>
    </div>
  </div>
</a>

<a href="movie.php?id=3">
  <div class="movie-container">
  <div class="movie" data-title="Hotel Transalveniya">
      <img src="./movies/1920x77096c611bf04c9466283111d02575d529f.webp" alt="Movie Title">
      <p class="movie-title">Hotel Transalveniya</p>
    </div>
  </div>
    </a>

<a href="movie.php?id=4">
  <div class="movie-container">

    <div class="movie" data-title="Blood of Zeus">
      <img src="./movies/1_ETpMZnK6pPfZaLfH7Ns1zw.jpg" alt="Movie Title">
      <p class="movie-title">Blood of Zeus</p>
    </div>
  </div>
</a>    

<a href="movie.php?id=5">
  <div class="movie-container">
    <div class="movie" data-title="Cryptic Investiagation">
      <img src="./movies/image/back to the outback.jpg" alt="Movie Title">
      <p class="movie-title">Back to the outback</p>
    </div>
  </div>
</a>


<a href="movie.php?id=6">
  <div class="movie-container">
    <div class="movie" data-title="Mano Mielas Monsteras">
      <img src="./movies/image/bread.jpg" alt="Movie Title">
      <p class="movie-title">Bread</p>
    </div>
    </div>
  </a>
    

  <a href="movie.php?id=7">
    <div class="movie-container">
    <div class="movie" data-title="Huroshitsui">
      <img src="./movies/image/candle.jpg" alt="Movie Title">
      <p class="movie-title">Candle</p>
    </div>
  </div>
  </a>
    <!-- Sample text for movies -->
    <!-- Add more movie blocks here -->
  </div>
</div>







<div class="Trending Movies">
  <h2>Trending Movies</h2>
  <div class="movie-slider">
    <!-- Repeat this block for each movie -->

    <a href="movie.php?id=8">
    <div class="movie-container">
      <div class="movie" data-title="Archie and Friends">
      <img src="./movies/image/chicken run.jpg" alt="Movie Title">
      <p class="movie-title">Chicken run</p>
    </div>
    </div>
    </a>


    <a href="movie.php?id=9">
    
    <div class="movie-container">
      <div class="movie" data-title="Thomas and ollie john"></div>
      <img src="./movies/image/disney encanto.jpg" alt="Movie Title">
      <p class="movie-title">Encanto</p>
    </div>
  </a>
    
    
  <a href="movie.php?id=10">
    <div class="movie-container">
      <div class="movie" data-title="Super Pets 2"></div>
      <img src="./movies/image/elephant.jpg" alt="Movie Title">
      <p class="movie-title">elephant</p>
    </div>
     </a>
    
    
     <a href="movie.php?id=11">
    <div class="movie-container">
      <div class="movie" data-title="Super Pets 1"></div>
      <img src="./movies/image/folded wish.jpg" alt="Movie Title">
      <p class="movie-title">Folded Wish</p>
    </div>
  </a>
    
    
  <a href="movie.php?id=12">
    <div class="movie-container">
      <div class="movie" data-title="Stolen Princess"></div>
      <img src="./movies/image/frozen.jpg" alt="Movie Title">
      <p class="movie-title">Frozen</p>
    </div>
    </a>
    

    
    <a href="movie.php?id=13">
    <div class="movie-container">
      <div class="movie" data-title="The Wildlife"></div>
      <img src="./movies/image/hair love.jpg" alt="Movie Title">
      <p class="movie-title">Hair Love</p>
    </div>
  </a>
    
    
  <<a href="movie.php?id=14">
    <div class="movie-container">
      <div class="movie" data-title="Frozn II">
      <img src="./movies/image/ice age.jpg" alt="Movie Title">
      <p class="movie-title">Ice Age</p>
    </div>
    </div></div>
  </a>

    <!-- Sample text for movies -->
    <!-- Add more movie blocks here -->
  </div>
</div>





<div class="Top 10 Movies">
  <h2>TOP 10 Movies</h2>
  <div class="movie-slider">
    <!-- Repeat this block for each movie -->


    
    <a href="movie.php?id=15">
    <div class="movie-container">
      <div class="movie" data-title="Pochohonta">
        <img src="./movies/image/leo.jpg" alt="Movie Title"> 
            <p class="movie-title">Leo</p>
    </div>
    </div>
    </a>
    

    <a href="movie.php?id=16">
    <div class="movie-container">
      <div class="movie" data-title="Enchanted"></div>
      <img src="./movies/image/leoo.jpg" alt="Movie Title">
      <p class="movie-title">Super Pets</p>
    </div>
  </a>
    
    

  <a href="movie.php?id=17">
    <div class="movie-container">
      <div class="movie" data-title="Epic"></div>
      <img src="./movies/image/Merida and Her Family Supper Shenanigans.jpg" alt="Movie Title">
      <p class="movie-title">Merida and Her Family Supper Shenanigans</p>
    </div>
  </a>
    



  <a href="movie.php?id=18"> 
    <div class="movie-container">
      <div class="movie" data-title="Hurcules"></div>
      <img src="./movies/image/migration.jpg" alt="Movie Title">
      <p class="movie-title">Migration</p>
    </div>
  </a>
    
    
  
  <a href="movie.php?id=19">
    <div class="movie-container">
      <div class="movie" data-title="Stolen Princess II"></div>
      <img src="./movies/image/moana.jpg" alt="Movie Title">
      <p class="movie-title">Moana</p>
    </div>
  </a>
    

  <a href="movie.php?id=20">
    <div class="movie-container">
      <div class="movie" data-title="Video Game Kid"></div>
      <img src="./movies/image/never give up.jpg" alt="Movie Title">
      <p class="movie-title">Never Give up</p>
    </div>
    
    
    
    <a href="movie.php?id=21">
    <div class="movie-container">
      <div class="movie" data-title="Ghibliotheque">
        <img src="./movies/image/oa;f.jpg" alt="Movie Title">
      <p class="movie-title">OLF</p>
    </div>
    </div>
  </a>
</div>
  

    <!-- Sample text for movies -->
    <!-- Add more movie blocks here -->
  </div>
</div>











<div class="Must Watch Today">
  <h2>MUST WATCH TODAY</h2>
  <div class="movie-slider">



    
    
    <!-- Repeat this block for each movie -->
    
    <a href="movie.php?id=22"> 
    <div class="movie-container">
      <div class="movie" data-title="P3">
        <img src="./movies/image/one.jpg" alt="Movie Title">
            <p class="movie-title">One</p>
    </div>
    </div>
    </a>
    

    <a href="movie.php?id=23">
    <div class="movie-container">
      <div class="movie" data-title="PIL"></div>
      <img src="./movies/image/orion and the dark.jpg" alt="Movie Title">
      <p class="movie-title">Orion & the dark</p>
    </div>
    </a>
    
    
    <a href="movie.php?id=24">
    <div class="movie-container">
      <div class="movie" data-title="Luca"></div>
      <img src="./movies/image/reusjkjfbakjE.jpg" alt="Movie Title">
      <p class="movie-title">Ratatouille</p>
    </div>
     </a>
    
    

     <a href="movie.php?id=25">
    <div class="movie-container">
      <div class="movie" data-title="Nsidering"></div>
      <img src="./movies/image/sea beast.jpg" alt="Movie Title">
      <p class="movie-title">Sea beast</p>
    </div>
    </a>
    
    

    <a href="movie.php?id=26">
    <div class="movie-container">
      <div class="movie" data-title="Luca II"></div>
      <img src="./movies/image/tangled.jpg" alt="Movie Title">
      <p class="movie-title">Tangled</p>
    </div>
    </a>
    

    <a href="movie.php?id=27">
    <div class="movie-container">
      <div class="movie" data-title="Tintin"></div>
      <img src="./movies/image/this wish.jpg" alt="Movie Title">
      <p class="movie-title">The Wish</p>
    </div>
    </a>

    <a href="movie.php?id=28">
    <div class="movie-container">
      <div class="movie" data-title="UP">
        <img src="./movies/image/tinkerbell.jpg" alt="Movie Title">
      <p class="movie-title">Tinkerbell</p>
    </div>
    </div>
  </a>
  </div>


    <!-- Sample text for movies -->
    <!-- Add more movie blocks here -->
  </div>
</div>
<div class="footer">
  <br>
  <h3> Questions? Call +92 3035231963</h3>
<br><br>
  <div class="row">
      <div class="col">
      <a href="#">FAQ</a>
      <a href="#">Investor Rekations</a>
      <a href="#"> Privacy</a>
       <a href="#">Speed Test</a>
  </div>
<br>
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
</div>













<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.movie-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    dots: true
  });
});


$(document).ready(function(){
  $('.movie-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});
</script>
<script>
  $(document).ready(function(){
    $('.movie-slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 5,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.movie-slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 5,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.hero-text');
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const target = entry.target;
        if (entry.isIntersecting) {
          target.classList.add('is-visible');
        } else {
          target.classList.remove('is-visible');
        }
      });
    }, { threshold: 0.1 });
  
    elements.forEach(element => {
      observer.observe(element);
    });
  });

  
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchButton = document.querySelector('.search-button');
      const searchOverlay = document.getElementById('searchOverlay');
      const searchInput = document.getElementById('searchInput');
  
      searchButton.addEventListener('click', function() {
        searchOverlay.style.display = 'block';
        searchInput.focus();
      });
  
      // Optional: close search when clicking outside
      searchOverlay.addEventListener('click', function(event) {
        if (event.target === searchOverlay) {
          searchOverlay.style.display = 'none';
        }
      });
    });
  </script>
  
  <script>
   document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('searchInput');
  const movieContainers = document.querySelectorAll('.movie-container');

  searchInput.addEventListener('input', function() {
    const searchText = searchInput.value.toLowerCase();

    movieContainers.forEach(container => {
      let isVisible = false;

      container.querySelectorAll('.movie').forEach(movie => {
        if (movie.dataset.title.toLowerCase().includes(searchText)) {
          movie.classList.remove('hidden'); // Remove 'hidden' class for matching movies
          isVisible = true;
        } else {
          movie.classList.add('hidden'); // Add 'hidden' class for non-matching movies
        }
      });

      // Optionally, you can also hide the entire container if no movies are visible
      container.style.display = isVisible ? 'block' : 'none';
    });
  });
});

  </script>
  
  
</body>
</html>
