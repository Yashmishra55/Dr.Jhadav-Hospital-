<?php
include_once __DIR__ . '/db.php';

if (!isset($conn) || !$conn) {
    die("Database connection not established. Check db.php");
}

$contact = mysqli_query($conn, "SELECT * FROM contactus");

if (!$contact) {
    die("Query failed: " . mysqli_error($conn));
}

$rowcontact = $contact->fetch_assoc();
?>
<!-- Main Header-->
<header class="main-header header-style-one">
    <div class="Scroll-Marquee">
        <div class="Scroll-Marquee-content">
            <a target="_blank" href="#" class="link-notification parent-notification">
                <div class="link-notification Scroll-Marquee-tag">We are Going to discard indoor case paper Record's on 30th June of May 2016 to December 2017. If any one wants claim their indoor case papers please come to Hospital & Collect it in Between 2:00pm to 5:00pm from 1st June 2024 to 30th June 2024 on weekday's only.</div>
            </a>

            <a target="_blank" href="#" class="link-notification parent-notification">
                <div class="link-notification Scroll-Marquee-tag">We are Going to discard indoor case paper Record's on 30th June of May 2016 to December 2017. If any one wants claim their indoor case papers please come to Hospital & Collect it in Between 2:00pm to 5:00pm from 1st June 2024 to 30th June 2024 on weekday's only.</div>
            </a>

            <a target="_blank" href="#" class="link-notification parent-notification">
                <div class="link-notification Scroll-Marquee-tag">We are Going to discard indoor case paper Record's on 30th June of May 2016 to December 2017. If any one wants claim their indoor case papers please come to Hospital & Collect it in Between 2:00pm to 5:00pm from 1st June 2024 to 30th June 2024 on weekday's only.</div>
            </a>

            <a target="_blank" href="#" class="link-notification">
                <div class="link-notification Scroll-Marquee-tag">We are Going to discard indoor case paper</div>
            </a>
        </div>
    </div>

    <!-- Header top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="flaticon-call-1"></i><?php echo isset($rowcontact['enquiry_number']) ? $rowcontact['enquiry_number'] : ''; ?></li>
                        <li><i class="flaticon-call-1"></i><?php echo isset($rowcontact['phone_no']) ? $rowcontact['phone_no'] : ''; ?></li>
                    </ul>
                </div>

                <div class="top-right">
                    <ul class="social-icon-one">
                        <li><a href="<?php echo $rowcontact['facebook']; ?>"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="<?php echo $rowcontact['instagram']; ?>"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="<?php echo $rowcontact['youtube']; ?>"><span class="fab fa-youtube"></span></a></li>
                        <li><a href="<?php echo $rowcontact['linkedin']; ?>"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="index.php"><img src="admin/uploads/contact_us/<?php echo $rowcontact['logo']; ?>" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li class="current"><a href="index.php#home">Home</a></li>
                            <li><a href="index.php#about-us">About Us</a></li>
                            <li><a href="treatment-&-care.php">Treatment & Care</a></li>
                            <li><a href="https://sahyamfoundation.org/">Sahyam Foundation</a></li>
                            <li><a href="media.php">Media</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box">
                        <a href="contact.php" id="appointment-btn" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="index.php"><img src="admin/uploads/contact_us/<?php echo $rowcontact['logo']; ?>" alt="" title=""></a></div>
                </div>
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="index.php"><img src="admin/uploads/contact_us/<?php echo $rowcontact['logo']; ?>" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <div class="outer-box">
                <!-- Search Btn -->
                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="blog-showcase.php">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->
</header>
<!--End Main Header -->
