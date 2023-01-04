<?php
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1"
    />
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat&family=Sacramento&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/b699c21610.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
      integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
      integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY="
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
	<!-- <link href="stylesheet.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="utilis.css" />
    <title>Javelin Tours & Travels</title>
  </head>

<body>

<header class="header">
      <div class="container-fluid">
        <nav class="nav">
          <a href="#home" class="logo">
            <img  class = "sathyamalogo" src="imgs/librarylogo.png" alt="logo" />
          </a>

          <div class="nav__button">
            <span class="nav__icon"></span>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="#home" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item">
              <a href="#features" class="nav-link">FACILITIES</a>
            </li>
            <li class="nav-item">
              <a href="#menu" class="nav-link">RESOURCES</a>
            </li>
            <li class="nav-item">
              <a href="#reservation" class="nav-link">BOOKING</a>
            </li>
          </ul>

          <ul class="icons">
            <a href="search.html">
              <li class="icon"><i class="fas fa-search"></i></li>
            </a>
            <a href="https://www.instagram.com/sathyabama.official/" target="_blank">
              <li class="icon"><i class="fab fa-instagram"></i></li>
            </a>
            <a href="https://www.github.com/" target="_blank">
              <li class="icon"><i class="fab fa-github"></i></li>

            </a>
            <a href="https://www.facebook.com/" target="_blank">
              <li class="icon"><i class="fab fa-facebook"></i></li>

            </a>

          </ul>
        </nav>
      </div>
    </header>

	<main>
      <div class="hero" id="home">
        <div class="container">
          <div class="premium-container">
            <img class="premium" src="img/Premium.png" alt="Premium" />
           
          </div>

          <div class="restaurant-title">
            <h1 class="title">
              Sathyabama <br />
              e-library
            </h1>
          </div>
        </div>

        <a class="go-top" href="#"><i class="fas fa-arrow-up"></i></a>
      </div>

    

      <section class="about" id="about">
        <div class="container-fluid">
          <div class="two-columns-grid">
            <div
              class="top-tart"
              data-aos="fade-right"
              data-aos-offset="400"
              data-aos-duration="1000"
            >
              <img
                src="imgs/about library.jpeg"
                alt="Tart"
                class="tart my-2"
              />
            </div>
            <div
              class="about-us"
              data-aos="fade-left"
              data-aos-offset="400"
              data-aos-duration="1000"
            >
              <h2 class="section-title welcome">ABOUT THE LIBRARY</h2>
              <p class="about-paragraph">
                Dr. N.S. Pradhan Memorial Library, the College Library of Kirori Mal College (University of Delhi), 
                Delhi is equipped to meet essential academic and intellectual needs of its users. It is spacious, 
                spread on two floors and has been renovated to make it more user friendly. Open access system, Spacious reading rooms provide 
                an atmosphere conducive to study. The college library is under CCTV surveillance.
                It is well stocked and collection consists of more than 150,000 books. Collection is continuously updated 
                with changes in curriculum. It subscribes many newspapers and magazines.
                Library is connected to Delhi University network with access to DULS databases and e-resources. 
                It is member of N-LIST (a programme of INFLIBNET) to provide remote access to users to huge number of e-resource.
                 Library is Wi-Fi enabled for internet connectivity. Many CD’s and DVD’s are also available in library collection.
              </p>
            </div>
          </div>

          <div class="two-columns-grid third-grid">
            <div
              class="read-more"
              data-aos="fade-right"
              data-aos-offset="400"
              data-aos-duration="1000"
            >
              <h2 class="section-title welcome">LIBRARY RULES</h2>
              <p class="about-paragraph">
               <strong>1).Library Membership:</strong> The membership of the College Library is open for all the bonafide students, 
                teachers and non-teaching staff of the College. The Library card is non-transferable.<br>
                <b>2).Library Timings:</b>The College Library is open five days a week (Monday to Friday). 
                Timings are 9.00 AM to 5.30 PM excluding Saturdays, Sundays and Gazetted holidays.</br>
                <b>3).Conditions of Borrowing of Books:</b>At the time of issuance of a book before leaving the counter, 
                the user must satisfy himself / herself that the book issued to him/her is in sound condition. </br>
                <b>4)Loss of Books: </b>The user is responsible for the safe custody of all the books issued to him/her. 
                In the event of loss of a book, the student is required to replace the book.</br>
                <b>5)Atmosphere of Study: </b>As the Library is a place for individual study, 
                it is necessary to maintain quiet, 
                calm and dignified atmosphere inside it in order to let all the users</br>
                <b>6)System for Feed-Back:</b>Feed-back register
                 has been placed in the college library wherein the users can give their feed-back and suggestions.</br>
              </p>
            </div>
            <div
              class="top-fruits"
              data-aos="fade-left"
              data-aos-offset="400"
              data-aos-duration="1000"
            >
              <img
                src="imgs/inner side.jpg"
                alt="Fruits"
                class="fruits my-2"
              />
            </div>
          </div>
        </div>
      </section>

   
  <section  class = "features" id="features">
    <div class="container">
        <h2 class="section-title">FACILITIES</h2>
        <h3 class="section-subtitle">OFFERED</h3>
    <div class="row">
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3>Reading Halls</h3>
      </div>
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3>Book Bank</h3>
      </div>
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3> Property Counter</h3>
      </div>
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3>Services</h3>
      </div>
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3>Library Committee</h3>
      </div>
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3>Journals and Magazines</h3>
      </div>
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3>Questions Papers</h3>
      </div>
      <div class="col-lg-4 feature-adjacement">
        <p class="font-awersome"><i class="fas fa-check-circle fa-4x"></i></p>
        
        <h3>e-Resources</h3>
      </div>
    </div>
    </div>
  </section>

      <section class="menu" id="menu">
        <div class="menu-header"></div>
        <div
          class="menu-card"
          data-aos="fade-up"
          data-aos-offset="300"
          data-aos-duration="1000"
        >
          <div class="menu-card-header">
           
            <h2 class="section-title menu-title">List of Departments</h2>
            <h3 class="section-subtitle">Resources available</h3>
          </div>

          <div class="two-columns-grid">
            <div class="starters">
              <h2>Tech Department</h2>
              <div class="starter">
                <div class="starter-header">
                  <h3><a href="/computing.html">School of Computing</a></h3>
                </div>
                <p class="menu-paragraph">
                  A Holiday that would delight your culinary senses in every way
                  possible | Bustronome Dinner Experience.
                </p>
              </div>

              <div class="starter">
                <div class="starter-header">
                  <h3><a href="/mechanical.html">School of mechanical</a></h3>
                </div>
                <p class="menu-paragraph">
                  The best place to visit with Family | River Thames Evening
                  Cruise | Stonehenge And Bath Day Trip From London
                </p>
              </div>

              <div class="starter">
                <div class="starter-header">
                  <h3><a href="/electrical.html">School of Electrical & Electronices</a></h3>
                </div>
                <p class="menu-paragraph">
                  Delight your soulmate this romantic season with adventurous
                  activities coming your way in Andaman.
                </p>
              </div>
            </div>
            <div class="mains">
              <h2>Non-tech Department</a></h2>
              <div class="starter">
                <div class="starter-header">
                  <h3><a href="/pharmacy.html">School of pharmacy</a></h3>
                 
                </div>
                <p class="menu-paragraph">
                  Be mesmerised by the crystal clear waters of Dawki Lake, visit
                  the cleanest village of Asia.
                </p>
              </div>

              <div class="starter">
                <div class="starter-header">
                  <h3><a href="/biochemical.html">school of bio &chemical</a></h3>
                
                </div>
                <p class="menu-paragraph">
                  Experience Dubai in Hampton by Hilton and visit the
                  enthralling Burj Khalifa. Witness the glittering skyline.
                </p>
              </div>

              <div class="starter">
                <div class="starter-header">
                  <h3><a href="/dental.html">School of Dental</a></h3>
                 
                </div>
                <p class="menu-paragraph">
                  Kochi's appeal spans history, geography and commerce in equal
                  measure. It is Keralaâs genuine melting pot.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="customers">
        <div class="container my-container">
          <h2 class="section-title">Staff</h2>
          
          <div class="carousel">
            <div>
              <img src="img/carousel1.png" alt="" />
              <p class="testimonial-paragraph">
                Overall service was nice. The driver was well groomed & polite.
                Minor issues will always be there but that could be overlooked
                if overall service is considered. Thank You guys for arranging a
                great trip.
              </p>
              <h2 class="name">Katey Gallardo</h2>
            </div>
            <div>
              <img src="img/carousel2.png" alt="" />
              <p class="testimonial-paragraph">
                The guidance to choose the proper package and the payment
                process are smooth and easy. Putting in touch with the chosen
                local agency to take care of planning details is good. Mr. Bhavi
                has provided good local support, provided good drivers.
              </p>
              <h2 class="name">Brandon Wolf</h2>
            </div>
          </div>
        </div>
      </section>

      <form action="index.php" method="post">
        <section class="book" id="reservation">
          <div class="container-fluid">
            <div class="book-card">
              <h2 class="section-title book-title">Select a Date & Book Now</h2>
              <h3 class="section-subtitle">
                We will confirm payment via E-mail or Phone
              </h3>
              <div class="two-columns-grid">
                <div class="form-group">
                  <input
                    type="text"
                    id="first"
                    class="input"
                    placeholder="First Name*"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    id="last"
                    class="input"
                    placeholder="Last Name*"
                  />
                </div>
              </div>

              <div class="two-columns-grid">
                <div class="form-group">
                  <input
                    type="text"
                    id="package"
                    class="input"
                    placeholder="Name of Package you Selected*"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    id="phone"
                    class="input"
                    placeholder="Phone Number"
                  />
                </div>
              </div>

              <div class="three-columns-grid">
                <div class="form-group">
                  <div class="form-group persons-1">
                    <input
                      type="text"
                      name="persons"
                      id="first"
                      class="input"
                      placeholder="Persons*"
                    />
                  </div>
                </div>
              </div>
              <button class="btn-book my-10">Book Now</button>
            </div>
          </div>
        </section>
      </form>
    </main>


<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Welcome <?php echo $name;?></span>
<br />
<br />
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td><a href="issueBook.php" class="Command">Issue Book</a></td><td><a href="request.php" class="Command">Request New Books</a></td></tr>
<tr><td><a href="changePassword.php" class="/,Command">Change Password</a></td><td><a href="logout.php" class="Command">Logout</a></td></tr>
</table>
<br />
<br />

<br />
<br />

</div>
</div>

<footer class="footer">
      <p class="copyright">
        Copyright &copy; 2022 by e-library. All rights reserved.
      </p>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
      integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0="
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="app.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>


