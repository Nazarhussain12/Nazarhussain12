

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemental- Kidflix</title>
    <link rel="shortcut icon" href="k.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <style>
        body {
            background-color: #1a1a1a;
            color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            margin-top: 200px;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #202020;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .video-wrapper {
            position: relative;
            margin-top: 0px;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }


        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .movie-info {
            padding: 20px;
            background-color: #282828;
            margin-top: -5px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .movie-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .movie-genre {
            font-size: 18px;
            color: #a0a0a0;
            margin-bottom: 20px;
        }

        .movie-description {
            line-height: 1.6;
        }


        .video-container {
    position: relative;
    width: 100%;
    max-width: 700px; /* Adjust as needed */
    margin: auto;
    overflow: hidden;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


.video-loading {
    display: inline-block;
    width: 80px;
    height: 80px;
    border: 4px solid rgba(255,255,255,0.3);
    border-radius: 50%;
    border-top: 4px solid #fff;
    animation: spin 2s linear infinite;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -40px;
    margin-left: -40px;
    z-index: 10;
}



    </style>
    <link rel="stylesheet" type="text/css" href="movie.css">
</head>
<body>
    <div class="container">

        <div class="top-bar">
            <img src="bg1.png" alt="Logo" class="logo">
            <div class="menu-right">
              
              
              <div class="three-dot-menu">
                <button>•••</button>
                <div class="menu-content">
                  <a href="#settings">Settings</a>
                  <a href="Kidflix.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
          <br><br><br><br><br><br>








          <?php
session_start();
require 'db_connections.php';

// Get the movie ID from the URL
$movie_id = isset($_GET['id']) ? intval($_GET['id']) : die('Movie ID not specified.');

// Fetch the movie details from the database
$query = "SELECT title, video, genre, description FROM movies WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();
$movie = $result->fetch_assoc();

// Check if the movie was found
if (!$movie) {
    die('Movie not found.');
}

// The relative path to the video from the root of your website
$relative_video_path = './movielist/videos/' . $movie['video'];

// Use the movie details to populate the page
echo '<div class="movie-title"><h1>' . htmlspecialchars($movie['title']) . '</h1></div>';
echo '<div class="video-wrapper">';
// Display the video
echo '<video controls>';
echo '<source src="' . $relative_video_path . '" type="video/mp4">';
echo 'Your browser does not support the video tag.';
echo '</video>';
echo '</div>';
echo '<div class="movie-info">';
echo '<div class="movie-title">' . htmlspecialchars($movie['title']) . '</div>';
echo '<div class="movie-genre">' . htmlspecialchars($movie['genre']) . '</div>';
echo '<p class="movie-description">' . htmlspecialchars($movie['description']) . '</p>';
echo '</div>';

// ... [The rest of your HTML code for movie.php] ...
?>



        <!---
        <div class="video-container">
            <div id="youtube-player">

            
            <div style="text-align: center; margin: auto"><iframe allowFullScreen="allowFullScreen"src="https://www.youtube-nocookie.com/embed/ZJdLJf4ZW-M?yt:stretch=16:9&vq=hd720p&loop=0&color=red&iv_load_policy=3&showinfo=0&autohide=0&controls=1&modestbranding=1" width="560" height="315" allowtransparency="true" frameborder="0" ></iframe></div>
            --->
      

<!-- Rating Section -->
<div class="rating-section">
  <h2>Rate This Movie</h2>
  <div class="stars" data-rating="0">
      <span class="star">&starf;</span>
      <span class="star">&starf;</span>
      <span class="star">&starf;</span>
      <span class="star">&starf;</span>
      <span class="star">&starf;</span>
  </div>
</div>

<!-- Comments Section -->
<div class="comments-section">
  <h2>Comments</h2>

  <div id="comments-list">
    <!-- User comments will go here -->
</div>

<br><br>
<div class="comment-form">
      <input type="text" id="username-input" placeholder="Enter your username" />
      <textarea id="comment-input" placeholder="Add a comment..." rows="4"></textarea>
      <button id="submit-comment">Submit</button>
  </div>
  
</div>



        <div class="Related Movies">
            <h2>Related Movies</h2>
            <div class="movie-slider">
              <!-- Repeat this block for each movie -->
              <div class="movie-container">
                <div class="movie" data-title="Archie and Friends">
                <img src="./movies/ArchieAndFriends_HotSummerMovies_Cover_Galvan.webp" alt="Movie Title">
                <p class="movie-title">Archie and Friends</p>
              </div>
              </div>
              
              
              <div class="movie-container">
                <div class="movie" data-title="Thomas and ollie john"></div>
                <img src="./movies/Book_the_illusion_of_life.jpg" alt="Movie Title">
                <p class="movie-title">Thomas and ollie john</p>
              </div>
              
              
              
              <div class="movie-container">
                <div class="movie" data-title="Super Pets 2"></div>
                <img src="./movies/dc-league-of-super-pets-the-deluxe-junior-novelization-dc-league-of-super-pets-movie-random-house-9780593487808.jpg" alt="Movie Title">
                <p class="movie-title">Super Pets 2</p>
              </div>
               
              
              
              <div class="movie-container">
                <div class="movie" data-title="Super Pets 1"></div>
                <img src="./movies/dc-league-of-super-pets-the-junior-novelization-dc-league-of-super-pets-movie-random-house-9780593430781.jpg" alt="Movie Title">
                <p class="movie-title">Super Pets 1</p>
              </div>
              
              
              
              <div class="movie-container">
                <div class="movie" data-title="Stolen Princess"></div>
                <img src="./movies/download (1).jpeg" alt="Movie Title">
                <p class="movie-title">Stolen Princess</p>
              </div>
              
              
              <div class="movie-container">
                <div class="movie" data-title="The Wildlife"></div>
                <img src="./movies/download (2).jpeg" alt="Movie Title">
                <p class="movie-title">The Wildlife</p>
              </div>
              
              
              
              <div class="movie-container">
                <div class="movie" data-title="Frozn II">
                <img src="./movies/download.jpeg" alt="Movie Title">
                <p class="movie-title">Frozn II</p>
              </div>
              </div></div>
          
          
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

<script src="https://www.youtube.com/iframe_api"></script>





<script>
let player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('youtube-player', {
            height: '360',
            width: '640',
            videoId: 'VIDEO_ID'
        });
    }
    </script>







<script>
$(document).ready(function() {
  // Rating stars

  $('.stars').on('click', '.star', function() {
      var index = $(this).index();
      $(this).parent().children('.star').each(function(e) {
          if (e <= index) {
              $(this).addClass('rated');
          } else {
              $(this).removeClass('rated');
          }
      });
      $(this).parent().attr('data-rating', index + 1);
  });
});
  
var userImages = [
        './movies/dp.jpg',
        './movies/dp2.jpg',
        './movies/dp3.jpg',
        './movies/dp4.jpg',
        './movies/dp5.jpg',
        './movies/dp6.jpg',
        './movies/dp7.jpg',
        './movies/dp8.jpg'
        // Add as many image paths as you have
    ];

$(document).ready(function() {
    // Load existing comments from local storage
    loadComments();

    // Submit new comment
    $('#submit-comment').click(function() {
        const username = $('#username-input').val().trim();
        const commentText = $('#comment-input').val().trim();
        const randomImage = userImages[Math.floor(Math.random() * userImages.length)];

        if (username && commentText) {
            const comment = {
                username: username,
                text: commentText,
                date: new Date().toISOString(),
                image: randomImage  // Update this path
            };
            saveComment(comment);
            appendComment(comment, getComments().length - 1);
            $('#username-input').val('');
            $('#comment-input').val('');
        } else {
            alert('Please enter both username and comment.');
        }
    });

    // Handle delete comment
    $('#comments-list').on('click', '.delete-comment', function() {
        if (confirm('Are you sure you want to delete this comment?')) {
            const commentIndex = $(this).closest('.comment').data('index');
            deleteComment(commentIndex);
            $(this).closest('.comment').remove();
        }
    });
});

function appendComment(commentData, index) {
    var commentHTML = `
        <div class="comment" data-index="${index}">
            <div class="user-image" style="background-image: url('${commentData.image}');"></div>
            <div class="comment-content">
                <span class="username">${commentData.username}</span>
                <br>
              
                <span class="comment-text">${commentData.text}</span>
            </div>
            <button class="delete-comment"></button>
        </div>
    `;
    $('#comments-list').prepend(commentHTML);
}

function saveComment(comment) {
    var comments = getComments();
    comments.push(comment);
    localStorage.setItem('comments', JSON.stringify(comments));
}

function loadComments() {
    var comments = getComments();
    comments.forEach((comment, index) => {
        appendComment(comment, index);
    });
}

function deleteComment(index) {
    var comments = getComments();
    comments.splice(index, 1);
    localStorage.setItem('comments', JSON.stringify(comments));
    reloadComments();
}

function getComments() {
    return JSON.parse(localStorage.getItem('comments')) || [];
}

function reloadComments() {
    $('#comments-list').empty();
    loadComments();
}

</script>






</body>
</html>
