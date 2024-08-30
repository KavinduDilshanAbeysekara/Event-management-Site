<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Creative Management</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet"/>
    <style>

        /* Basic styling for the body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #4b4949;
        }

        /* Styling for table data in the team section */
        td.member{
            font-weight: 700;
        }

        /* Bold text styling */
        .bold {
            font-size: larger;
            font-weight: 700;
            color: crimson;
        }

        /* Padding for the story section */
        .story {
            padding-inline: 140px;
        }

        /* Center-align text in specific sections */
        .logo_centered {
            text-align: center;
        }

        /* Center-align and bold text in the intro section */
        .intro {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        /* Container styling for responsive design */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Styling for headings and horizontal rules */
        h1, h3 {
            color: #0056b3;
            text-align: center;
        }

        hr {
            border: 0;
            height: 5px;
            background: #ddd;
            margin: 20px 0;
        }

        /* Section styling with background color, padding, and shadow */
        .about-section, .team-section, .values-section {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Styling for images */
        img {
            border-radius: 10px;
            transition: transform 0.3s;
        }

        /* Hover effect for images */
        img:hover {
            transform: scale(1.1);
        }

        /* Table styling for team and values sections */
        .team-table, .values-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .team-table td, .values-table td {
            padding: 10px;
            text-align: center;
        }

        .team-table img, .values-table img {
            display: block;
            margin: 0 auto;
        }

        /* Bold styling for values in the values table */
        td.values{
            font-weight:600;
        }

        /* Button for scrolling to the top of the page */
        .go-top-button {
            position: fixed;
            bottom: 20px;
            right: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            display: none;
        }

        .go-top-button img {
            height: 40px;
            width: 40px;
        }

        /* Background image and gradient for the header section */
        .header{
            min-height: 100vh;
            width: 100%; 
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(../images/aboutus_\ header.jpg);
            background-position: center;
            background-size:cover ;
            position: relative;
        }

    </style>

</head>

<body>

<!-- Header section with navigation and introductory text -->
    <section class="header">
        <nav>
          <a href="../index.php"
            ><img src="../images/logo.png" width="100px" height="100px"
          /></a>
          <div class="nav-links">
          <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="">About Us</a></li>
              <li><a href="/event-management-site/pages/service.php">Services</a></li>
              <li><a href="/event-management-site/pages/events.php">Events</a></li>
              <li><a href="/event-management-site/pages/contactus.php">Contact Us</a></li>
            </ul>
          </div>
        </nav>
  
        <div class="text-box">
          <h1 style="color: rgb(221, 218, 218);">About Us</h1>
          <p>
            Our Story
          </p>
          <a href="https://www.facebook.com" target="_blank" class="hero-btn">Visit Us To know More</a>
        </div>
      </section>
    
      <!-- Main content container -->
    <div class="container">

        <!-- About section with images and introduction -->
        <div class="about-section">
            <table>
                <tr>
                    <td class="story"><img src="../images/logo.png" height="250px" width="250px" alt="Our Logo"></td>
                    <td class="story"><img src="../images/hall.jpg" height="200px" width="200px" alt="Event Hall"></td>
                </tr>
            </table>
            <p class="intro">Our journey began with a vision to create unforgettable experiences. Pictured here is the first event we
                <b class="bold"> first ever</b> elegant wedding that marked the start of our commitment to excellence.
            </p>
        </div>

        <!-- Team section with images and names -->
        <div class="team-section">
            <h3>Executive Board</h3>
            <table class="team-table">
                <tr>
                    <td><img src="../images/ceo.jpg" alt="CEO" height="200px" width="200px"></td>
                    <td><img src="../images/emma.jpg" alt="COO Emma" height="200px" width="220px"></td>
                    <td><img src="../images/james.jpg" alt="Creative Director" height="200px" width="220px"></td>
                    <td><img src="../images/michael.jpg" alt="COO Michael" height="200px" width="220px"></td>
                </tr>
                <tr>
                    <td class="member">Darren Fernandez<br>CEO</td>
                    <td class="member">Emma Johnson<br>COO</td>
                    <td class="member">James Davis<br>Creative Director</td>
                    <td class="member">Michael Smith<br>COO</td>
                </tr>
            </table>
            <p>Meet our dedicated team of professionals who bring creativity, expertise, and a personal touch to every
                event.</p>
        </div>

        <!-- Values section with images and descriptions -->
        <div class="values-section">
            <h3>Company Values</h3>
            <table class="values-table">
                <tr>
                    <td><img src="../images/hands.jpg" alt="Teamwork" height="200px" width="200px"></td>
                    <td><img src="../images/discussion.jpg" alt="Customer Engagement" height="200px" width="220px"></td>
                    <td><img src="../images/team.jpg" alt="Talent" height="200px" width="220px"></td>
                </tr>
                <tr>
                    <td class="values">Teamwork</td>
                    <td class="values">Customer Engagement</td>
                    <td class="values">Highly Talented Members</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Button to scroll to the top of the page -->
    <button class="go-top-button" onclick="goToTop()">
        <img src="../images/arrow.png" alt="Go to top">
    </button>

    <!-- Footer section with copyright information -->
    <div class="footer">
        <p>&copy; 2024 Creative Management. All rights reserved.</p>
    </div>

    <!-- JavaScript for scroll-to-top button functionality -->
    <script>
        window.onscroll = function() {
            var button = document.querySelector(".go-top-button");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        };

        function goToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
