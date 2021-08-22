<?php require_once('../include/Sessions.php') ?>
<?php require_once('../include/functions.php') ?>
<?php ConfirmLogin(); ?>
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
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <title>Exchangeme - Requests</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/apexcharts-bundle/dist/apexcharts.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header--mobile">
        <div class="header__left">
            <button class="ps-drawer-toggle"><i class="icon icon-menu"></i></button><img src="" alt="">
        </div>
        <div class="header__center"><a class="ps-logo" href="#"><img src="img/logo.png" alt=""></a></div>
        <div class="header__right"><a class="header__site-link" href="#"><i class="icon-exit-right"></i></a></div>
    </header>
    <aside class="ps-drawer--mobile">
        <div class="ps-drawer__header">
            <h4> Menu</h4>
            <button class="ps-drawer__close"><i class="icon icon-cross"></i></button>
        </div>
        <div class="ps-drawer__content">
            <ul class="menu">
                <li><a href="index.html"><i class="icon-home"></i>Dashboard</a></li>
                <li><a href="products.html"><i class="icon-database"></i>Products</a></li>
                <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                <li><a class="active" href="exchange-req.html"><i class="icon-users2"></i>Exchange Req</a></li>
                <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
            </ul>
        </div>
    </aside>
    <div class="ps-site-overlay"></div>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">
                        <div class="ps-block__left"><img src="img/user/admin.jpg" alt="" /></div>
                        <div class="ps-block__right">
                            <p>Hello,<a href="#">Vicky Store</a></p>
                        </div>
                        <div class="ps-block__action"><a href="#"><i class="icon-exit"></i></a></div>
                    </div>
                    <div class="ps-block--earning-count"><small>Earning</small>
                        <h3>₹12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li><a href="index.html"><i class="icon-home"></i>Dashboard</a></li>
                            <li><a href="products.html"><i class="icon-database"></i>Products</a></li>
                            <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                            <li><a class="active" href="exchange-req.html"><i class="icon-users2"></i>Exchange Req</a></li>
                            <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="img/logo.png" alt="">
                            <p>&copy;2020 Exchangeme marketplace. <br/> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-main__wrapper">
            <header class="header--dashboard">
                <div class="header__left">
                </div>
                <div class="header__center">
                    <div class="header__left">
                        <h3  style="display: inline;">My Exchange Requests</h3>
                    </div>
                </div>
                <div class="header__right"><a class="header__site-link" href="#"><span>View your store</span><i class="icon-exit-right"></i></a></div>
            </header>
            <section class="ps-items-listing">
                <div class="ps-section__header simple">
                    <div class="ps-section__filter">
                        <form class="ps-form--filter" action="index.html" method="get">
                            <div class="ps-form__left">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Search..." />
                                </div>
                                
                            </div>
                            <div class="ps-form__right">
                                <button class="ps-btn ps-btn--gray"><i class="icon icon-funnel mr-2"></i>Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>My Product</th>
                                    <th>Customer Product</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment success">Active chat</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment" style="color: red;">Rejected</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment" style="color: rgb(2, 219, 2);">Completed</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment success">Active chat</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment success">Active chat</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment success">Active chat</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment success">Active chat</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#A580</td>
                                    <td><strong> Aug, 15, 2020</strong></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Black Military</strong></a></td>
                                    <td><a href="order-detail.html"></a><strong>Unero Military</strong></a></td>
                                    </td>
                                    <td><span class="ps-fullfillment success">Active chat</span>
                                    </td>
                                    <td style="text-align: left;">
                                        <span class="ps-badge success">Chat</span> &nbsp;&nbsp;<span class="ps-badge gray">Reject</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ps-section__footer">
                    <p>Show 10 in 30 items.</p>
                    <ul class="pagination">
                        <li><a href="#"><i class="icon icon-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icon-chevron-right"></i></a></li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/apexcharts-bundle/dist/apexcharts.min.js"></script>
    <!-- custom code-->
    <script src="js/main.js"></script>
</body>

</html>