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
</head>

<body>
    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/8.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1>Treatment & Care</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Treatment & Care</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-lg-12 col-md-12 col-sm-12">
                        <div class="shop-single">
                            <div class="product-details">
                                <div class="text" style="margin:20px 0px;">
                                    At Dr Jadhav Multi-specialty Hospital, your health is our priority. Our dedicated team of doctors and facilities aim to provide you with the highest quality healthcare, making a positive impact on your well-being.Here is an overview of our key services:
                                </div>

                                <!--Basic Details-->
                                <?php
                                $team = mysqli_query($con, "SELECT * FROM treatment_care");
                                while ($rowteam = $team->fetch_assoc()) {
                                ?>
                                    <div class="basic-details">
                                        <div class="row clearfix">
                                            <div class="image-column col-md-4 col-sm-12">
                                                <figure class="image-box"><a href="admin/uploads/treatment_care/<?php echo $rowteam['image']; ?>" class="lightbox-image" title="Image Caption Here"><img src="admin/uploads/treatment_care/<?php echo $rowteam['image']; ?>" alt=""></a></figure>
                                            </div>

                                            <div class="info-column col-md-8 col-sm-12">
                                                <div class="details-header">
                                                    <h4><?php echo $rowteam['title']; ?></h4>
                                                </div>

                                                <div class="text">
                                                    <?php echo $rowteam['description']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
