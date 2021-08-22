<?php require_once('include/Sessions.php') ?>
<?php require_once('include/functions.php') ?>
<?php
$ucheck = 0;
if (isset($_SESSION['user_id'])) {
    $ucheck = 1;
}
if (isset($_GET['id'])) {
    $query = "SELECT * FROM vehicles WHERE vid='$_GET[id]'";
    $exec = Query($query);
} else {
    $query = "SELECT * FROM vehicles";
    $exec = Query($query);
}
$vehicle = mysqli_fetch_assoc($exec);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>RentalRides - <?php echo $vehicle['vname'] ?></title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/organic.css">
</head>

<body>
    <?php require('include/header.php'); ?>
    <header class="header header--mobile organic" data-sticky="true">
        <div class="navigation--mobile">
            <div class="navigation__left"><a class="ps-logo" href="index.html"><img src="img/logo.svg" alt="" width="200px"></a></div>
            <div class="ps-block--user-header">
                <div class="ps-block__left"><i class="icon-user"></i></div>
                <div class="ps-block__right"><a href="my-account.html" style="top: 8px;">
                        <?php
                        if ($ucheck == 1) {
                            echo $_SESSION['user_name'];
                        } else {
                            echo "Login / Register";
                        }
                        ?>
                    </a></div>
            </div>
        </div>
        <div style="display: none;" id="userid"><?php  echo $_SESSION['user_id'];?></div>
        <div style="display: none;" id="prodid"><?php  echo $_GET['id'];?></div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Your City...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>
    <div id="homepage-9">
        <div class="ps-page--product">
            <div class="container">
                <div class="ps-product--detail ps-product--full-content">
                    <div class="ps-product__top">
                        <div class="ps-product__header">
                            <div class="ps-product__thumbnail" data-vertical="true">
                                <figure>
                                    <div class="ps-wrapper">
                                        <div class="ps-product__gallery" data-arrow="true">
                                            <div class="item"><a href="admin/images/<?php echo $vehicle['image'] ?>"><img src="admin/images/<?php echo $vehicle['image'] ?>" alt=""></a></div>
                                        </div>
                                    </div>
                                </figure>

                            </div>
                            <div class="ps-product__info" style="margin-left: 150px;">
                                <h1><?php echo $vehicle['vname'] ?></h1>
                                <div class="ps-product__desc">
                                    <p>Rented By:<strong> <?php echo $vehicle['uname'] ?></strong></p>
                                    <p>City:<strong> <?php echo $vehicle['city'] ?>,<?php echo $vehicle['states'] ?></strong></p>
                                    <?php echo $vehicle['vdisc'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product__price-right">
                            <h4 class="ps-product__price">₹<?php echo $vehicle['vrate'] ?> per day</h4>
                            <div class="ps-product__shopping">

                                <figure>
                                    <figcaption>Days</figcaption>
                                    <div>
                                        <input id="numb" class="form-control" style="background-color: white;" type="number" value="1" placeholder="1">
                                    </div>
                                </figure><button class="ps-btn" id="addbtn">Rent Now</button>

                            </div>
                        </div>
                    </div>
                    <div class="ps-product__content">
                        <h3 class="ps-product__heading">Similar</h3>
                        <div class="ps-section__content">
                            <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <?php
                                $query = "SELECT * FROM vehicles WHERE vtype='$vehicle[vtype]' OR city='$vehicle[city]' ORDER BY vrate DESC LIMIT 7";
                                $exec = Query($query);
                                while ($vehicle = mysqli_fetch_assoc($exec)) {
                                ?>
                                    <div class="ps-product ps-product--inner">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="admin/images/<?php echo $vehicle['image'] ?>" alt="<?php echo $vehicle['vname'] ?>" style="width: 250px; height: 250px; object-fit: cover;"></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html"><?php echo $vehicle['vname'] ?></a>
                                                <div class="ps-product__vendor"><i class="icon-map-marker"></i><u><?php echo $vehicle['city'] ?>,
                                                        <?php
                                                        if (strlen($vehicle['states']) <= 10) {
                                                            echo $vehicle['states'];
                                                        } else {
                                                            echo substr($vehicle['states'], 0, 10) . '...';
                                                        }
                                                        ?>
                                                    </u></div>
                                                <p class="ps-product__price sale">₹<?php echo $vehicle['vrate'] ?>/day</p>
                                                <center><a class="ps-btn" style="width: 100%; text-align: center;font-size: 13px;padding-left: 25px;padding-right: 25px;" href="product.php?id=<?php echo $vehicle['vid'] ?>">Rent Now</a></center>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------->
        <?php require('include/footer.php'); ?>
    </div>
    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/nouislider/nouislider.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/imagesloaded.pkgd.min.js"></script>
    <script src="plugins/masonry.pkgd.min.js"></script>
    <script src="plugins/isotope.pkgd.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/sticky-sidebar/dist/sticky-sidebar.min.js"></script>
    <script src="plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- custom scripts-->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            // Get value on button click and show alert
            $("#addbtn").click(function() {
                var val = $("#numb").val();
                var action = 'add';
                var userid = $('#userid').text();
                var prodid = $('#prodid').text();
                $.ajax({
                    url: "addcart.php",
                    method: "POST",
                    data: {
                        action: action,
                        user: userid,
                        prod:prodid,
                        val: val,
                    },
                    success: function(output) {
                        Swal.fire({
                            icon: 'success',
                            title: 'hurray',
                            text: 'Added to cart.',
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>