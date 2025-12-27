<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include __DIR__ . '/db.php';
?>

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

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>
<body>
<div class="page-wrapper">
<?php include 'header.php'; ?>

<!-- Banner Section -->
<section class="banner-section-one" id="home">
    <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
        <!-- Slide Item -->
        <div class="slide-item" style="background-image: url('images/main-slider/slider1.jpg');">
            <div class="auto-container">
                <div class="content-outer">
                    <div class="content-box">
                        <h2>Your Health is Our Priority</h2>
                        <div class="text">Providing compassionate and advanced healthcare services to the community with utmost dedication and care.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item" style="background-image: url('images/main-slider/slider2.jpg');">
            <div class="auto-container">
                <div class="content-outer">
                    <div class="content-box">
                        <h2>Advanced Multispecialty Hospital</h2>
                        <div class="text">State-of-the-art facilities and experienced doctors committed to your wellbeing.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Features -->
<section class="top-features">
    <div class="auto-container">
        <div class="row">
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box custome">
                    <span class="icon uil uil-heart-medical"></span>
                    <h4>Compassionate Care</h4>
                    <p>Our team ensures each patient receives personalized and empathetic attention.</p>
                </div>
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box custome">
                    <span class="icon uil uil-stethoscope"></span>
                    <h4>Expert Doctors</h4>
                    <p>Highly qualified specialists providing precise diagnosis and treatments.</p>
                </div>
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box custome">
                    <span class="icon uil uil-hospital"></span>
                    <h4>Modern Facilities</h4>
                    <p>Equipped with the latest medical technology for comprehensive healthcare services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Treatments & Care Section -->
<section class="services-section" id="treatment-care">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Treatments & Care</h2>
            <span class="divider"></span>
            <div class="sec-bottom-text">Explore a diverse range of specialized treatments designed to cater to your unique healthcare needs.</div>
        </div>

        <div class="row">
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon"><img src="images/service/cardiology.png" alt="Cardiology"></span>
                    <h5><a href="treatment-&-care.php">Cardiology</a></h5>
                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon"><img src="images/service/neurology.png" alt="Neurology"></span>
                    <h5><a href="treatment-&-care.php">Neurology</a></h5>
                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon"><img src="images/service/orthopaedics.png" alt="Orthopaedics"></span>
                    <h5><a href="treatment-&-care.php">Orthopaedics</a></h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="treatment-&-care.php" class="btn-style-one">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Premises -->
<section class="services-section-five" id="hospital-premises">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Hospital Premises</h2>
            <span class="divider"></span>
            <div class="sec-bottom-text">Our meticulously designed premises aim to provide a nurturing space for every patient.</div>
        </div>

        <div class="carousel-outer">
            <div class="services-carousel owl-carousel owl-theme default-dots">
                <div class="service-block-five">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/background/hospital1.jpg" alt="Hospital Image"></figure>
                        </div>
                        <div class="lower-content">
                            <h4>Reception Area</h4>
                        </div>
                    </div>
                </div>
                <div class="service-block-five">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/background/hospital2.jpg" alt="Hospital Image"></figure>
                        </div>
                        <div class="lower-content">
                            <h4>Operation Theater</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section-three" id="about-us">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>About Us</h2>
            <span class="divider"></span>
        </div>

        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>Dr. Jadhav Multi-specialty Hospital</h2>
                    <p>Committed to providing world-class healthcare with compassion, integrity, and advanced medical technology.</p>

                    <h2>Our Vision</h2>
                    <p>To be the leading multi-specialty hospital recognized for excellence in patient care.</p>

                    <h2>Our Expectation</h2>
                    <p>We aim to exceed patient expectations through continuous improvement, state-of-the-art facilities, and a caring staff.</p>
                </div>
            </div>

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/resource/aboutus.jpg" alt="About Us"></figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Meet Our Visionaries</h2>
            <span class="divider"></span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image-box" style="background-image: url('images/clients/shivraj.jpg'); background-size: cover; height: 372px;"></div>
                        <div class="content-box">
                            <h4>Dr. Shivraj Jadhav</h4>
                            <div class="text">The visionary behind our hospital, committed to healthcare excellence.</div>
                            <a href="dr-shivraj-jadhav.html" class="theme-btn btn-style-one read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image-box" style="background-image: url('images/clients/megha.jpg'); background-size: cover; height: 372px;"></div>
                        <div class="content-box">
                            <h4>Dr. Megha Shivraj Jadhav</h4>
                            <div class="text">Plays a key role in hospital management and patient welfare initiatives.</div>
                            <a href="dr-megha-shivraj-jadhav.html" class="theme-btn btn-style-one read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>

</div>
</body>
</html>