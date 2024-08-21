1 <?php require('./dbconn.php');
  session_start();
  if (isset($_SESSION['user']['email'])) {
    header('Location:Login/dashboard.php');
  }
  $page_title = "Volunteer Login";
  require('./partials/volunteer/header.php');
  // Login Volunteer  
  if (isset($_POST['volunteer_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM volunteer_registration WHERE v_email='{$email}' AND v_password='{$password}'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      // var_dump("<br><br><br><br><br>");  
      // var_dump($row);  '
      // exit;  
      $_SESSION['user']['full_name'] = $row['v_full_name'];
      $_SESSION['user']['email'] = $row['v_email'];
      header('Location:Login/dashboard.php');
    }
  }
  ?>
<style>
  html {
    scrollbar-width: none;
  }

  body::-webkit-scrollbar {
    display: none;
  }
</style>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Volunteer Login</h2>
      <p>Welcome back, volunteers! Please enter your login credentials below to access your account.</p>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="">
        <form action="" method="post" class="php-email-form"><div class="row">
            <div class="col-3"> </div>
            <div class="col-6">
              <div class="form-group"> <label for="email" class="form-label">Email</label> <input type="email" name="email" class="form-control" id="email" placeholder="Email" required> </div>
              <div class="form-group"> <label for="password" class="form-label">Password</label> <input type="password" name="password" class="form-control" id="password" placeholder="Password" required> </div>
              <div class="text-center"> <input type="submit" name="volunteer_login" value="Login" class="a-btn px-4"> </div>
            </div>
            <div class="col-3"> </div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section --> </main><!-- End #main --> <?php require('./partials/footer.php'); ?>