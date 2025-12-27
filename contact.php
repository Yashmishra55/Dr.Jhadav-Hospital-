<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dr. Jadhav Multi-specialty Hospital</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-straight/css/uicons-bold-straight.css'>

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_secret = "6Lfmq_YrAAAAAIHYygdyZtk_dUV-8pOfSQVFLKCy";
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Verify the response with Google
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}");
    $response_data = json_decode($verify);

    $name = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['phone_no'];
    $messsssage = $_POST['contact_message'];
    $to = "vanita@webnetdigitalmedia.com";

    $subject = "Enquiry From SGC Shipping Services";

    $message = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
    $message .= '<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SGC Shipping Services</title>
    </head>
    <body style="margin:0; padding:0">
        <div style="width:600px; margin:0 auto; border-top:27px solid #FF3333; border-bottom:27px solid #FF3333; border-left:27px solid #F0F0F0; border-right:27px solid #F0F0F0; padding-bottom:10px;">
            <div class="detail">
                <h1 style="font-size:16px; text-align:center; margin-top:30px; text-decoration:underline; color:#FF3333;"><strong>Enquiry From SGC Shipping Services</strong></h1>
                <table border="1" align="center" cellpadding="10" cellspacing="0" width="80%">
                    <tr>
                        <td style="font-size:15px;width:50%;">Customer Name :</td>
                        <td>'.$name.'</td>
                    </tr>
                    <tr>
                        <td style="font-size:15px;width:50%;">Email :</td>
                        <td>'.$email.'</td>
                    </tr>
                    <tr>
                        <td style="font-size:15px;width:50%;">Contact No.:</td>
                        <td>'.$contact.'</td>
                    </tr>
                    <tr>
                        <td style="font-size:15px;width:50%;">Message :</td>
                        <td>'.$messsssage.'</td>
                    </tr>
                </table><br>
            </div>
        </div>
        <table>
            <tr>
                <td height="27" align="center" valign="top" bgcolor="#f0f0f0">&nbsp;</td>
            </tr>
        </table>
    </body>
    </html>';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
    $headers .= 'Bcc: vanita@webnetdigitalmedia.com' . "\n";

    $email = mail($to, $subject, $message, $headers);

    if ($response_data->success || $email) {
        echo "<script>alert('Your Message has been sucessfully send');</script>";
        echo "<script>window.location.assign('index.php');</script>";
    } else {
        echo "reCAPTCHA verification failed. Please try again.";
    }
}
?>

<div class="page-wrapper">
    <?php include 'header.php'; ?>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <?php
    $contact = mysqli_query($con, "SELECT * FROM contact_us");
    $rowcontact = $contact->fetch_assoc();
    ?>

    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <?php echo $rowcontact['map']; ?>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="small-container">
            <div class="sec-title text-center">
                <span class="sub-title">Contact Now</span>
                <h2>Write us a Message !</h2>
                <span class="divider"></span>
            </div>

            <!-- Contact box -->
            <div class="contact-box">
                <div class="row">
                    <div class="contact-info-block col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-worldwide"></span>
                            <h4><strong>Address</strong></h4>
                            <p><?php echo $rowcontact['address']; ?></p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-phone"></span>
                            <h4><strong>For booking appointment and other enquiries</strong></h4>
                            <p><a href="tel:<?php echo $rowcontact['enquiry_number']; ?>"><?php echo $rowcontact['enquiry_number']; ?></a></p>
                            <h4><strong>For emergency</strong></h4>
                            <p><a href="tel:<?php echo $rowcontact['phone_no']; ?>"><?php echo $rowcontact['phone_no']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form box -->
            <div class="form-box">
                <div class="contact-form">
                    <form action="contact.php" method="post">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <div class="response"></div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="username" class="username" placeholder="Full Name *">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="email" placeholder="Email Address *">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone_no" class="username" placeholder="Your Phone">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <textarea name="contact_message" class="message" placeholder="Massage"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="g-recaptcha" data-sitekey="6Lfmq_YrAAAAAM8IuetBWz1Qdj9sbEuB-UvYcax7"></div>
                            </div>

                            <div class="form-group col-lg-12 text-center pt-3">
                                <button class="theme-btn btn-style-one" type="submit" id="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

    <?php include 'footer.php'; ?>
</div>
</body>
</html>
