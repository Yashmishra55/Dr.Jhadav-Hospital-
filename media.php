<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include database connection
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dr. Jadhav Multi-specialty Hospital - Media</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
<div class="page-wrapper">
    <?php include 'header.php'; ?>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Media</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Media</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section alternate">
        <div class="auto-container">
            <div class="mixitup-gallery">
                <div class="heading-line-bottom">
                    <h3 class="heading-title">Our Events & Activities</h3>
                </div>

                <div class="filter-list row mid-spacing">
                    <?php
                    $media_query = mysqli_query($con, "SELECT * FROM media ORDER BY id DESC");

                    if(mysqli_num_rows($media_query) > 0) {
                        while ($media = $media_query->fetch_assoc()) {
                            $image = !empty($media['image']) ? $media['image'] : 'placeholder.jpg';
                            $title = !empty($media['title']) ? $media['title'] : 'Event';
                    ?>
                        <div class="portfolio-block col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="admin/uploads/media/<?php echo $image; ?>" alt="<?php echo htmlspecialchars($title); ?>">
                                </figure>
                                <div class="overlay">
                                    <a href="admin/uploads/media/<?php echo $image; ?>" data-fancybox="gallery" data-caption="<?php echo htmlspecialchars($title); ?>" class="icon-box"><span class="fa fa-expand"></span></a>
                                </div>
                                <div class="portfolio-title text-center mt-2">
                                    <h5><?php echo htmlspecialchars($title); ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    } else {
                        echo '<div class="col-12"><p class="text-center">No media available at the moment.</p></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</div>

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {});
</script>

</body>
</html>
