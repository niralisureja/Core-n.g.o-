<?php

require('./dbconn.php');

$page_title = "Reach Us";

$name  = $phone = $email = $subject = $msg = "";

if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];
        $query = "INSERT INTO demo (name,email,phone,subject,message) 
        VALUES('{$name}','{$email}','{$phone}','{$subject}','{$msg}')";

        if (mysqli_query($conn, $query)) {
            echo "Your message has been sent";
        }
}
?>
<div class="col-lg-6">
    <form action="" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="row">
            <div class="col form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone no." >
            </div>
            <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
        </div>
        <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
    </form>
</div>