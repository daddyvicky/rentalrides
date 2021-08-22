<?php require_once('include/Sessions.php') ?>
<?php require_once('include/functions.php') ?>
<?php
$ucheck = 0;
if (isset($_SESSION['user_id'])) {
    $ucheck = 1;
}
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
    <title>RentalRides - Products</title>
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
    <script src="admin/js/cities.js"></script>
</head>

<body>
    <?php include('include/header.php'); ?>
    <header class="header header--mobile header--mobile-categories" data-sticky="true">
        <div class="header__filter">
            <button class="ps-shop__filter-mb" id="filter-sidebar"><i class="icon-equalizer"></i><span>Filter</span></button>
            
        </div>
    </header>
    <div id="homepage-9">
        <div class="ps-breadcrumb">
            <div class="ps-container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
        <div class="ps-page--shop" id="shop-sidebar">
            <div class="container">
                <div class="ps-layout--shop">
                    <div class="ps-layout__left">
                        <aside class="widget widget_shop removal" style="position: -webkit-sticky;position: sticky;top: 100px;">
                            <h4 class="widget-title">Location</h4>
                            <!-----city filter---------->
                            <div class="form-group">
                                <select onchange="print_ccity('state', this.selectedIndex);" id="sts" name="stt" class="form-control ps-select common_selector" required></select>
                            </div>
                            <div class="form-group">
                                <select id="state" class="form-control ps-select common_selector" name="city" required></select>
                            </div>
                            <!--------------->
                            <h4 class="widget-title">Category</h4>
                            <figure class="ps-custom-scrollbar" data-height="250">
                                <div class="ps-checkbox">
                                    <input class="form-control common_selector type" type="checkbox" id="brand-1" value="car">
                                    <label for="brand-1">Cars</label>
                                </div>
                                <div class="ps-checkbox">
                                    <input class="form-control common_selector type" type="checkbox" id="brand-2" value="bike">
                                    <label for="brand-2">Bikes</label>
                                </div>
                                <div class="ps-checkbox">
                                    <input class="form-control common_selector type" type="checkbox" id="brand-3" value="cycle">
                                    <label for="brand-3">Cycles</label>
                                </div>
                            </figure>
                            <figure>
                                <h4 class="widget-title">By Price</h4>
                                <div id="nonlinear"></div>
                                <p class="ps-slider__meta">Price:<span class="ps-slider__value">₹<span class="ps-slider__min"></span></span>-<span class="ps-slider__value">₹<span class="ps-slider__max"></span></span></p>
                            </figure>
                        </aside>
                    </div>
                    <div class="ps-layout__right">
                        <div class="ps-shopping ps-tab-root">
                            <div class="ps-shopping__header">
                                <p><strong id="prod_count"></strong> Products found</p>
                                <div class="ps-shopping__actions">
                                    <select class="ps-select common_selector" id="sorting" data-placeholder="Sort Items">
                                        <option val="0">Default</option>
                                        <option val="1">low to high</option>
                                        <option val="2">high to low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="ps-shopping-product">
                                        <div class="row prods">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------->
        <?php require('include/footer.php'); ?>
        <div class="ps-filter--sidebar">
            <div class="ps-filter__header">
                <h3>Filter Products</h3><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
            </div>
            <div class="ps-filter__content">
                <aside class="widget widget_shop">
                    <h4 class="widget-title">Location</h4>
                    <!-----city filter---------->
                    <div class="form-group">
                        <select onchange="print_ccity('state', this.selectedIndex);" id="sts" name="stt" class="form-control common_selector" required></select>
                    </div>
                    <div class="form-group">
                        <select id="state" class="form-control common_selector" name="city" required></select>
                    </div>
                    <!--------------->

                    <figure>
                        <h4 class="widget-title">By Price</h4>
                        <div id="nonlinear"></div>
                        <p class="ps-slider__meta">Price:<span class="ps-slider__value">₹<span class="ps-slider__min"></span></span>-<span class="ps-slider__value">₹<span class="ps-slider__max"></span></span></p>
                    </figure>
                </aside>
            </div>
        </div>
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
    <?php
    if (isset($_GET['type'])) {
        echo "<input type='hidden' id='oftype' value='$_GET[type]'></input><input style='display:none;' id='ofcity' value='$_GET[city]'></input>";
    }
    ?>
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
    <!-- custom scripts-->
    <script src="js/main.js"></script>
    <script language="javascript">
        $(document).ready(function() {
            if (window.innerWidth < 1199) {
                $('.removal').html('');
            }
            print_sstate("sts");
        });
    </script>
    <script>
        $(document).ready(function() {

            filter_data();

            function filter_data() {
                $('.prods').html('<div class="cssload-content"><div><div class="cssload-l1"></div><div class="cssload-l2"></div><div class="cssload-l3"></div>	</div></div>');
                var action = 'fetch_data';
                var minimum_price = $('.ps-slider__min').text();
                var maximum_price = $('.ps-slider__max').text();
                var state = get_filter('sts');
                var city = get_filter('state');
                var sort = get_filter('sorting');
                var type = get_filterr('type');
                if ($('#oftype').length) {
                    if($("#oftype").val()=="1"){
                       var txt = $("#ofcity").val();
                        city = txt;
                    }else{
                        var txt = $("#ofcity").val();
                        city = txt;
                        var filter = [];
                        filter.push($("#oftype").val())
                        type = filter;
                        
                    }
                }
                $.ajax({
                    url: "fetch_data.php",
                    method: "POST",
                    data: {
                        action: action,
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        state: state,
                        city: city,
                        sort: sort,
                        type: type,
                    },
                    success: function(output) {
                        var data = $.parseJSON(output);
                        $('.prods').html(data[0]);
                        $('#prod_count').html(data[1]);
                    }
                });
            }

            function get_filter(id_name) {
                if ($('#' + id_name).find(':selected').val() == 0) {
                    return '';
                } else {
                    return $('#' + id_name).find(':selected').text();
                }

            };

            function get_filterr(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $(".common_selector").change(function() {
                filter_data();
            });


            function filterSlider() {
                var nonLinearSlider = document.getElementById('nonlinear');
                if (typeof nonLinearSlider != 'undefined' && nonLinearSlider != null) {
                    noUiSlider.create(nonLinearSlider, {
                        connect: true,
                        behaviour: 'tap',
                        start: [100, 3000],
                        range: {
                            min: 100,

                            max: 3000,
                        },
                    });
                    var nodes = [
                        document.querySelector('.ps-slider__min'),
                        document.querySelector('.ps-slider__max'),
                    ];
                    nonLinearSlider.noUiSlider.on('update', function(values, handle) {
                        nodes[handle].innerHTML = Math.round(values[handle]);
                        filter_data();
                    });
                }
            };
            filterSlider();
        });
    </script>
</body>

</html>