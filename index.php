<?php

require('./dbconn.php');

$page_title = "New Hope Foundation";
require('./partials/frontend/header.php')


?>

<style>
  html {
    scrollbar-width: none;
  }

  body::-webkit-scrollbar {
    display: none;
  }
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <div class="row">
      <div class="col-xl-6  ">
        <h1>NGO Management System</h1>
        <h2>Streamlining Operations and Maximizing Impact</h2>
        

        <button id="donate-btn" class="btn-get-started scrollto">Donate</button>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>About Our NGO</h2>
      </div>
      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch">
          <div class="content">
            <h3>New Hope Foundation<span style="color: #e03a3c;">.</span></h3>
            <p>
              Saint Kabir Road<br>Rajkot<br>GJ 360002<br>
              India
            </p>
            <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Collect Donetion</h4>
                <p>We rely on the generosity of our supporters to fund our programs and services, and we make it as easy as possible for individuals to contribute.</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Donation Management</h4>
                <p>Our donation management system allows to track donations, receipts, and reports that measure the effectiveness of our fundraising efforts</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-images"></i>
                <h4>Distribution Management</h4>
                <p>We take great care to ensure that the resources we provide are distributed efficiently and effectively, reaching those who need them most.</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-shield"></i>
                <h4>Various Events</h4>
                <p>We also collaborate with other organizations and community groups to create meaningful partnerships and expand our reach.</p>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section>


  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg ">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Contribution</h2>
        <p>Our NGO is dedicated to making a positive impact in the community by providing programs and services that address the unique needs of individuals and families. <br> We are committed to outreach and raising awareness about the resources available to those in need, and we rely on the generosity of our supporters to fund our initiatives.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-briefcase"></i>
            <h4><a href="#">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-card-checklist"></i>
            <h4><a href="#">Dolor Sitema</a></h4>
            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-bar-chart"></i>
            <h4><a href="#">Sed ut perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-binoculars"></i>
            <h4><a href="#">Nemo Enim</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-brightness-high"></i>
            <h4><a href="#">Magni Dolore</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
            <i class="bi bi-calendar4-week"></i>
            <h4><a href="#">Eiusmod Tempor</a></h4>
            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
      </div>

      <ul class="faq-list accordion" data-aos="fade-up">
      <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">What is the role of NGO?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p>
            NGOs or non government organizations, play a critical role in the development of the society in the sense that they promote advocacies targeted to effect change in a local or larger scale. The roles of NGOs vary widely from development, operation, innovation, technical assistance, training and implementation of different advocacies.            </p>
          </div>
        </li>
        <li>
          <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">What are the minimum members required to register an NGO ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
            he minimum members required to register an NGO is 3 if it is a Trust. It is not necessary to have all 3 members from 3 different states. If you are registering a Society, you must have a minimum members of 7 from seven different states of India.            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">What are the primary posts involved in an NGO ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              An NGO has basically 3 min posts which that of a President, General Secretary and Treasurer. In some cases, you can also have a Vice President.
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">What’s better, monetary donations or usable items?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
            Both types of charity are beneficial as far as the Tax benefits are concerned. For people who can make time, we suggest them to personally visit the NGO and make their contribution of any type. Either money or items or time.          </div>
        </li>


        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Is the donated amount rightly used for Poor People?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq5" class="collapse" data-bs-parent=".faq-list">
            <p>
            To ensure that the donor is rightly informed about the expenditure of their donations, SERUDS or any registered NGO will follow a strict post-donation procedure and bills for the same are duly shared.             </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Which payment Gateway is good to donate online?

<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq6" class="collapse" data-bs-parent=".faq-list">
            <p>
            Unlike before, we have plenty of payment gateways today which includes Razor pay, CC Avenue, Paytm etc, any payment gateway is fine and fully secured.            </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Developer Team</h2>
        <p>Our team of experienced developers is dedicated to creating innovative solutions that meet the needs of our clients and exceed their expectations.</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>pina sureja </h4>
              <span>NGO OWNER
              </span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
            <img src="assets/img/team/team-2.png" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/ved.prajapati.nyc" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/ll_engineerfriendo_ll" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>NIRALI SUREJA</h4>
              <span>NGO PRESIDENT </span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>SWETABEN VYAS </h4>
              <span>ACCOUNT MANGER </span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Astha Maniyar</h4>
              <span>Project Member</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>
          If you would like to get in touch with us, please fill out the contact form on our website or email us at admin@ngorganization.in
        </p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Saint Kabir Road, Rajkot, GJ 360002</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>admin@ngorganization.in<br>contact@ngorganization.in</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="row">
              <div class="col form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone no." required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message"><?= $msg_sent ?></div>
            </div>
            <div class="text-center"><button type="submit" name="contact">Send Message</button></div>
          </form>
        </div>
        <?php

        require('./dbconn.php');

        $page_title = "Reach Us";

        $name  = $phone = $email = $subject = $msg = "";

        if (isset($_POST['contact'])) {

          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $subject = $_POST['subject'];
          $msg = $_POST['message'];
          $query = "INSERT INTO contact_us (cus_name,cus_email,cus_phone_no,cus_subject,cus_message) 
          VALUES('{$name}','{$email}','{$phone}','{$subject}','{$msg}')";

          if (mysqli_query($conn, $query)) {
            echo "<script>alert('Your message has been sent. Thank you!');</script>";
          }
        }
        ?>
        <script>
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }
          </script>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php

require('./partials/frontend/donatemodal.php');
require('./partials/footer.php');

?>