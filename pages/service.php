<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Creative Management</title>
    <link rel="stylesheet" href="../css/index.css" /> <!-- Link to the main stylesheet for the website -->
    <link rel="preconnect" href="https://fonts.googleapis.com" /> <!-- Preconnect to optimize loading Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> <!-- Preconnect to Google Fonts with cross-origin -->
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon"> <!-- Favicon for the site -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet"/> <!-- Link to Google Fonts for Poppins -->
</head>

<body>

    <!-- Header section with background image and navigation -->
    <section class="header">
        <img src="../images/services-cover.jpg" alt="Services Cover" class="cover-img"> <!-- Cover image for the services page -->
        <nav>
          <a href="../index.php"><img src="../images/logo.png" width="100px" height="100px"/></a> <!-- Logo with link to the homepage -->
          <div class="nav-links"><!-- Link to the pages -->
            <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="/event-management-site/pages/aboutus.php">About Us</a></li>
              <li><a href="">Services</a></li>
              <li><a href="/event-management-site/pages/events.php">Events</a></li>
              <li><a href="/event-management-site/pages/contactus.php">Contact Us</a></li>
            </ul>
          </div>
        </nav>
  
        <div class="text-box">
          <h1 style="color: rgb(202, 194, 194);">Our Services</h1><!-- Page heading -->
          <p>What We Offer</p> <!-- Subtitle or description -->
          <a href="https://www.facebook.com" target="_blank" class="hero-btn">Visit Us To Know More</a> <!-- Button linking to Facebook -->
        </div>
    </section>
    
    <div class="container">
        <div class="services-section">
            <h3 style="text-align: center;">Our Services</h3><!-- Section heading for services -->
            <div class="row">

                <!-- Service columns with descriptions -->
                <div class="service-col">
                    <h3>Wedding Planning</h3> <!-- Service title -->
                    <p>We offer comprehensive wedding planning services, ensuring your special day is flawless.</p> <!-- Service description -->
                </div>
                <div class="service-col">
                    <h3>Corporate Events</h3>
                    <p>Our team excels in organizing professional corporate events, from meetings to large conferences.</p>
                </div>
                <div class="service-col">
                    <h3>Birthday Parties</h3>
                    <p>Celebrate your birthday with us and enjoy a memorable party tailored to your preferences.</p>
                </div>
            </div>
            <div class="row">
                <div class="service-col">
                    <h3>Private Parties</h3>
                    <p>Our private party services guarantee an exclusive and intimate experience for you and your guests.</p>
                </div>
                <div class="service-col">
                    <h3>Catering Services</h3>
                    <p>We provide top-notch catering services to make your event deliciously unforgettable.</p>
                </div>
                <div class="service-col">
                    <h3>Decoration Services</h3>
                    <p>Our decoration services will transform your event space into a beautiful and themed venue.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Button to scroll to the top of the page -->
    <button class="go-top-button" onclick="goToTop()">
        <img src="../images/arrow.png" alt="Go to top">
    </button>

    <div class="footer">
        <p>&copy; 2024 Creative Management. All rights reserved.</p> <!-- Footer with copyright information -->
    </div>

    <script>

        // Show or hide the "go to top" button based on scroll position
        window.onscroll = function() {
            var button = document.querySelector(".go-top-button");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.display = "block";// Show button when scrolled down
            } else {
                button.style.display = "none";// Hide button when at the top
            }
        };

        // Scroll to the top of the page when the button is clicked
        function goToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
