<?php
require('./dbconn.php');

session_start();
if (isset($_SESSION['user']['email'])) {
  header('Location:Login/dashboard.php');
}


$page_title = "Digital Donation";
require('./partials/frontend/donationHeader.php');

// Register Volunteer Data

$fname_err = $lname_err = $father_name_err = $email_err = $mobile_number_err = $whatsapp_number_err = $dob_err = $aadhar_number_err = $passport_number_err = $profile_image_err = $password_err = $confirm_password_err = "";

$fname = $lname = $father_name = $email = $mobile_number = $whatstapp_number = $dob = $aadhar_number = $passport_number = $profile_image = $profile_image_name = $password = $confirm_password = "";

if (isset($_POST['submit'])) {

  if (empty($_POST['fname'])) {
    $fname_err = "First Name is Required";
  } else {
    $fname = $_POST['fname'];
  }

  if (empty($_POST['lname'])) {
    $lname_err = "Last Name is Required";
  } else {
    $lname = $_POST['lname'];
  }

  if (empty($_POST['father_name'])) {
    $father_name_err = "Father Name is Required";
  } else {
    $father_name = $_POST['father_name'];
  }

  if (empty($_POST['email'])) {
    $email_err = "Email is Required";
  } else {
    $email = $_POST['email'];
  }

  if (empty($_POST['mobile_number'])) {
    $mobile_number_err = "Mobile Number is Required";
  } else {
    $mobile_number = $_POST['mobile_number'];
  }

  if (empty($_POST['whatsapp_number'])) {
    $whatsapp_number_err = "Whatsapp Number is Required";
  } else {
    $whatsapp_number = $_POST['whatsapp_number'];
  }

  if (empty($_POST['dob'])) {
    $dob_err = "Date of Birth is Required";
  } else {
    $dob = $_POST['dob'];
  }

  if (empty($_POST['aadhar_number']) && empty($_POST['passport_number'])) {
    $aadhar_number_err = "Aadhar Number OR Passport number is Required";
    $passport_number_err = "Aadhar Number OR Passport number is Required";
  } else {
    $aadhar_number = $_POST['aadhar_number'];
    $passport_number = $_POST['passport_number'];
  }

  if (!isset($_FILES['profile_image']['name'])) {
    $profile_image_err = "Profile Image is Required";
  } else {
    $profile_image = $_FILES['profile_image'];
    $profile_image_name = $profile_image['name'];
  }

  if (empty($_POST['password'])) {
    $password_err = "password is Required";
  } else {
    if (empty($_POST['confirm_password'])) {
      $confirm_password_err = "Confirm Password is Required";
    } else if ($_POST['password'] != $_POST['confirm_password']) {
      $confirm_password_err = "Password And Confirm Password Must be Same";
    } else {
      $password = $_POST['password'];
    }
  }


  if (!empty($fname) && !empty($lname) && !empty($father_name) && !empty($email) && !empty($mobile_number) && !empty($whatsapp_number) && !empty($dob) && !empty($aadhar_number) && !empty($passport_number) && !empty($password)) {

    $full_name = ($fname . " " . $lname);
    $query = "INSERT INTO volunteer_registration( v_profile_image , v_email ,v_password , v_phone_no , v_whatsapp_no , v_full_name , v_father_name , v_date_of_birth, v_address , v_education, v_occupation , v_cast, v_pan_no , v_passport_no , v_aadhar_no) 
    VALUES(
        '{$profile_image_name}' ,
        '{$email}' ,
        '{$password}' ,
        {$mobile_number} ,
        {$whatsapp_number} ,
        '{$full_name}' ,
        '{$father_name}' ,
        '{$dob}' , 
        '' , 
        '' , 
        '' , 
        '' , 
        '' , 
        {$passport_number} ,
        {$aadhar_number}
    )";
    // VALUES('{$image['name']}' , '{$email}' , '{$password}' , {$phone_number} , {$whatsapp_number} , '{$full_name}' , '{$father_name}' , '{$dob}' , '' , '' , '' , '' , '' , '{$passport_number}' ,{$aadhar_number}) ";

    if (mysqli_query($conn, $query)) {
      header('Location:Volunteer_Login.php');
    }
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

  /* Chrome, Safari, Edge, Opera */
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }
</style>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Monetary Donation</h2>
      <p>Your monetary donation can help us continue to provide vital programs and services to those in need. <br>Whether you choose to make a one-time donation or set up a recurring donation, every contribution makes a meaningful impact in the community.</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="">
        <form action="" method="post" class="php-email-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col form-group">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
              <small class="form-label text-danger"><?= $fname_err ?></small>
            </div>
            <div class="col form-group">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
              <small class="form-label text-danger"><?= $lname_err ?></small>

            </div>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            <small class="form-label text-danger"><?= $email_err ?></small>

          </div>
          <div class="row">
            <div class="col form-group">
              <label for="mobile-number" class="form-label">Mobile Number</label>
              <input type="tel" maxlength="10"  name="mobile_number" class="form-control" id="mobile-number" placeholder="Mobile Number" required>
              <small class="form-label text-danger"><?= $mobile_number_err ?></small>
            </div>
            <div class="col form-group">
              <label for="whatsapp-number" class="form-label">Whatsapp Number</label>
              <input type="tel" maxlength="10"  name="whatsapp_number" class="form-control" id="whatsapp-number" placeholder="WhatsApp Number" required>
              <small class="form-label text-danger"><?= $whatsapp_number_err ?></small>

            </div>
          </div>
          <div class="form-group">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" required>
            <small class="form-label text-danger"><?= $dob_err ?></small>

          </div>

          <div class="row">
            <div class="col-5 form-group">
              <label for="aadhar-number" class="form-label">Aadhar Number</label>
              <input type="tel" maxlength="12" name="aadhar_number" class="form-control" id="aadhar-number" placeholder="Aadhar Number">
              <small class="form-label text-danger"><?= $aadhar_number_err ?></small>

            </div>
            <div class="col-2 form-group">
              <div class="text-center"><label for="" class="form-label"></label></div>
              <div class="text-center"><label for="" class="form-label"></label></div>
              <div class="text-center"><label for="" class="form-label">OR</label></div>
            </div>
            <div class="col-5 form-group">
              <label for="passport-number" class="form-label">Passport Number</label>
              <input type="tel" maxlength="15" name="passport_number" class="form-control" id="passport-number" placeholder="Passport Number">
              <small class="form-label text-danger"><?= $passport_number_err ?></small>
            </div>
          </div>
          <div class="form-group">
            <label for="amount" class="form-label">Amount you want to Contribute</label>
            <input type="tel" maxlength="10" name="amount" class="form-control" id="amount" placeholder="Donation Amount" required>
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message " name="message" rows="5" placeholder="Message" required></textarea>
          </div>
      </div>

      <div class="text-center">
        <input type="submit" name="submit" value="Donate" class="a-btn">
      </div>
      </form>
    </div>

  </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<?php

require('./partials/footer.php');

?>