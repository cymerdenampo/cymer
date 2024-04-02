<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["send"])) {
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'cymerdenampo@gmail.com';
  $mail->Password = 'loumkxqwvtowkuiw';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom($_POST['email'], $_POST['name']);
  $mail->addAddress($_POST["email"]);
  $mail->isHTML(true);
  $mail->Subject = $_POST["name"];
  $mail->Body = $_POST["message"];

  $mail->send();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
  <title>CJ Denampo Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/cymer 1.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Cymer Jacob</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/DenampoCymer" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/cymerjacob.denampo.9" class="facebook" target="_blank"><i
              class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/jacobovelhoms/" class="instagram" target="_blank"><i
              class="bx bxl-instagram"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
              <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Cymer Jacob Denampo</h1>
      <p>I'm <span class="typed"
          data-typed-items="a Data Engineer, a Web Developer, a Graphic Designer and a Technical Support"></span></p>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Hi I'm Cymer Jacob Denampo from the land of landslide Sindulan Tina-an, City of Naga Cebu, Philippines.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/cymer 1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Data Engineer, Web Developer, Graphic Designer &amp; Tech Support.</h3>
            <p class="fst-italic">
              <!--text here-->
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>April 11 2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>09** *** ****</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Sindulan Tina-an, City of Naga
                      Cebu</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor of Science in
                      Information Technology</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>cymerdenampo@gmail.com</span>
                  </li>
                </ul>
              </div>
            </div>
            <p>
              To apply my expertise in data engineering and graphic designing and have the expertise to create
              cutting-edge solutions that optimize data-driven processes.
              Leveraging my proficiency in programming languages like PHP, SQL, and others, I design efficient data
              architectures to develop high-performance systems.
              Additionally, I have extensive experience in database design, coding, and optimization and experienced
              graphic designer, web developer, and database administrator,
              I am confident that I can contribute to your team's success.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p> <!--text here--> </p>
        </div>

        <div class="col-lg-6" data-aos="fade-up">
          <li>Excellent communication skills to collaborate with cross-functional teams and explain technical concepts
            to non-technical stakeholders</li>
          <li>Proficiency in programming languages such as Php, SQL and Java</li>
          <li>Attention to detail and accuracy to ensure data integrity</li>
          <li>Proficiency in programming languages such as HTML, CSS, JavaScript, and a server-side language such as PHP
          </li>
          <li>Understanding of user experience (UX) and user interface (UI) design principles</li>
          <li>Ability to create responsive and mobile-friendly websites</li>
          <li>Creativity and a strong sense of aesthetics to create visually appealing designs</li>
          <li>Proficiency in design software such as Adobe Photoshop and Illustrator</li>
          <li>Strong communication and collaboration skills to work with clients and cross-functional teams</li>
          <li>Ability to work under tight deadlines and manage multiple projects simultaneously</li>
          <li>Strong problem-solving skills to identify and troubleshoot technical issues</li>
          <li>Patience and empathy to provide customer support with a positive attitude</li>
          <li>Knowledge of operating systems such as Windows and Windows, and hardware components such as CPUs, RAM, and
            storage</li>
          <li>Ability to work under pressure and prioritize tasks based on urgency</li>
        </div>

      </div>
    </section>
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">

          <h2>Resume</h2>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>College</h4>
              <ul>
                <li>Professional Academy of the Philippines</li>
                <p>East Poblacion, City of Naga Cebu</p>
                <p>Bachelor of Science in Information Technology</p>
                <h5>2020 - Present</h5>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Senior High School</h4>
              <ul>
                <li>Naga National High School</li>
                <p>West Pob. City of Naga, Cebu</p>
                <p>Electrical Installation and Maintenance</p>
                <h5>2019 - 2020</h5>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Secondary</h4>
              <ul>
                <li>Naga National High School</li>
                <p>West Pob. City of Naga, Cebu</p>
                <p>TVL - Major in Electrical Installation and Maintenance</p>
                <h5>2016 - 2017</h5>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Primary</h4>
              <ul>
                <li>Naga Central Elementary School</li>
                <p>West Pob. City of Naga, Cebu</p>
                <h5>2011 - 2012</h5>
              </ul>
            </div>

            <h3 class="resume-title">Achievements</h3>
            <div class="resume-item">
              <ul>
                <h4>NC II PASSER</h4>
                <li>Electrical Installation and Maintenance</li>
                <h5>2017</h5>
              </ul>
            </div>

            <h3 class="resume-title">Working Experience</h3>
            <div class="resume-item">
              <h4>Working Experience</h4>
              <ul>
                <li>Data Engineer</li>
                <p>Tribe Guild</p>
                <h5>2023</h5>

                <li>Graphic Designer/Video Editor</li>
                <p>ProjecLab</p>
                <h5>2023</h5>

                <li>Graphic Designer</li>
                <p>Cebu Printmaster</p>
                <h5>2022</h5>

                <li>Student Assistant at Registrar’s Office</li>
                <p>Professional Academy of the Philippines</p>
                <h5>2021 - 2022</h5>

                <li>Waiter</li>
                <p>Cocina Calza Catering Services</p>
                <h5>2014 - 2022</h5>
              </ul>
            </div>

          </div>
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Character References</h3>
            <div class="resume-item pb-0">
              <ul>
                <li>Registrar’s Office</li>
                <P>Professional Academy of the Philippines</P>
                <P>(032) 273 6484</P> &nbsp;
                <li>Mary Grace Cuyno – Lozada</li>
                <p>Dean, College of Computer Studies</p>
                <p>Professional Academy of the Philippines</p>
                <p>0995 007 2338</p>&nbsp;
                <li>Bob Keri O. Bacus</li>
                <p>Instructor, College of Computer Studies</p>
                <p>Professional Academy of the Philippines</p>
                <p>0965 655 0952</p>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-projects">projects</li>
              <li data-filter=".filter-certificates">certificates</li>
              <li data-filter=".filter-images">images</li>
              <li data-filter=".filter-jersey">jersey</li>
              <li data-filter=".filter-videos">videos</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <!-- CERTIFICATES -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-certificates">
            <div class="portfolio-wrap">
              <img src="assets/certificates/Cymer Certification and Leaning Opportunities.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/certificates/Cymer Certification and Leaning Opportunities.jpg"
                  data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificates">
            <div class="portfolio-wrap">
              <img src="assets/certificates/Cymer Data Science & artificial Intelligence.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/certificates/Cymer Data Science & artificial Intelligence.jpg"
                  data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificates">
            <div class="portfolio-wrap">
              <img src="assets/certificates/Cymer Software Engineering.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/certificates/Cymer Software Engineering.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificates">
            <div class="portfolio-wrap">
              <img src="assets/certificates/Cymer Cybersecurity.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/certificates/Cymer Cybersecurity.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificates">
            <div class="portfolio-wrap">
              <img src="assets/certificates/Cymer E-commerce & Financial Technology.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/certificates/Cymer E-commerce & Financial Technology.jpg"
                  data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificates">
            <div class="portfolio-wrap">
              <img src="assets/certificates/Cymer ICT Trends.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/certificates/Cymer ICT Trends.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- CERTIFICATES -->

          <!-- IMAGES -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/business types.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/business types.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/tarp.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/tarp.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/TICKET NGA NAA SA HAND.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/TICKET NGA NAA SA HAND.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Mood Board Cymer.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Mood Board Cymer.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/BLACK TICKET.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/BLACK TICKET.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FOOD TICKET.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FOOD TICKET.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/gatepass.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/gatepass.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/meal stub.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/meal stub.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/EROPLATO.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/EROPLATO.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/LAPIS LAUGH FACE.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/LAPIS LAUGH FACE.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/NOSE DIVE.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/NOSE DIVE.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/POST IT SHOOTOUT.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/POST IT SHOOTOUT.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FOR GRAPHIC RESUME.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FOR GRAPHIC RESUME.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Macro Cycle.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Macro Cycle.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/UMS-PRO.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/UMS-PRO.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/UMS-TECH Support.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/UMS-TECH Support.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sticker.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/sticker.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-images">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/wendy.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/wendy.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- IMAGES -->

          <!-- JERSEY -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/SK JERSEY.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/SK JERSEY.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/POLO.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/POLO.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/COUZINS.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/COUZINS.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/jersey3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/jersey3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/jersey4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/jersey4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- JERSEY -->

          <!-- VIDEOS -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-videos">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/black.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Copy of Mr. and Miss Education.mp4" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-videos">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/black.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/GROUP ACTIVITY FINAL EDIT.mp4" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- VIDEOS -->

          <!-- PROJECTS -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714" href="assets/projects/activity.zip" download>Register Form with Database</a>
              <div class="portfolio-links">
                <a href="assets/projects/activity.zip" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714;" href="assets/projects/basiccrud.zip" download>Crud with Database</a>
              <div class="portfolio-links">
                <a href="assets/projects/basiccrud.zip" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714" href="assets/projects/database.zip" download>Record List with Database</a>
              <div class="portfolio-links">
                <a href="assets/projects/database.zip" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714" href="assets/projects/java-name-address-age.zip" download>Personal Details with
                Database</a>
              <div class="portfolio-links">
                <a href="assets/projects/java-name-address-age.zip" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714" href="assets/projects/LAST REVISE MaterialMe-Starter-master.zip" download>Mobile
                app</a>
              <div class="portfolio-links">
                <a href="assets/projects/LAST REVISE MaterialMe-Starter-master.zip" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714" href="assets/projects/Login Page with Database for CAP 2.zip" download>Login
                Page With database</a>
              <div class="portfolio-links">
                <a href="assets/projects/Login Page with Database for CAP 2.zip" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714" href="assets/projects/TRIBEFORMDATABASE OFFLINE.zip" download>Application Form
                with Database</a>
              <div class="portfolio-links">
                <a href="assets/projects/TRIBEFORMDATABASE OFFLINE.zip" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <a style="color: #dda714" href="assets/projects/loginwithdiscord.zip" download>Login with Discord</a>
              <div class="portfolio-links">
                <a href="assets/projects/loginwithdiscord.zip" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- PROJECTS -->

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Sindulan Tina-an, City of Naga Cebu</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>cymerdenampo@gmail.com</p>
              </div>

              <!-- <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>09** *** ****</p>
              </div> -->

              <iframe
                src="https://maps.google.com/maps?q=sindulan city of naga cebu&t=&z=10&ie=UTF8&iwloc=&output=embed"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="index.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="send">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2023 <strong><span></span></strong>
      </div>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/cymerjacob.denampo.9" target="_blank">Cymer</a>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>