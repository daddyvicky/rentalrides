<?php require_once('../include/Sessions.php') ?>
<?php require_once('../include/functions.php') ?>
<?php ConfirmLogin(); ?>
<?php
$del = 0;
if (isset($_GET['del_id'])) {
    $qq = "SELECT * FROM vehicles WHERE vid='$_GET[del_id]' and uid=$_SESSION[user_id]";
    $ee = Query($qq);
    $file = mysqli_fetch_assoc($ee);
    unlink('images/' . $file['image']);
    $query = "DELETE FROM vehicles WHERE vid='$_GET[del_id]' and uid=$_SESSION[user_id]";
    $exec = Query($query);
    if ($exec) {
        $del = 1;
    }
}
$query = "SELECT * FROM vehicles where uid=$_SESSION[user_id]";
$exec = Query($query);
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
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <title>RentalRides - My Account</title>
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

<body style="height: 100vh;">
    <header class="header--mobile">
        <div class="header__left">
            <button class="ps-drawer-toggle"><i class="icon icon-menu"></i></button><img src="" alt="">
        </div>
        <div class="header__center"><a class="ps-logo" href="#"><img src="../img/logo.svg" alt=""></a></div>
        <div class="header__right"><a class="header__site-link" href="../"><i class="icon-home"></i></a></div>
    </header>
    <aside class="ps-drawer--mobile">
        <div class="ps-drawer__header">
            <h4> Menu</h4>
            <button class="ps-drawer__close"><i class="icon icon-cross"></i></button>
        </div>
        <div class="ps-drawer__content">
            <ul class="menu">
                <li><a href="index.php" class="active"><i class="icon-car2"></i>My Vehicles</a></li>
                <li><a href="cart.php"><i class="icon-history"></i>Cart</a></li>
                <li><a href="logout.php"><i class="icon-exit"></i>Logout</a></li>
            </ul>
        </div>
    </aside>
    <div class="ps-site-overlay"></div>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">

                        <div class="ps-block__right">
                            <p>Hello,<a href="#"><?php echo $_SESSION["user_name"] ?></a></p>
                        </div>

                    </div>
                    <div class="ps-block--earning-count"><small>Vehicles Earning</small>
                        <h3>₹12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li><a href="index.php" class="active"><i class="icon-car2"></i>My Vehicles</a></li>
                            <li><a href="cart.php"><i class="icon-history"></i>Cart</a></li>
                            <li><a href="logout.php"><i class="icon-exit"></i>Logout</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="../img/logo.svg" alt="">
                            <p>&copy;2021 RentalRides. <br /> All rights reversed.</p>
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
                        <h3 style="display: inline;">My Vehicles</h3>
                    </div>
                </div>
                <div class="header__right"><a class="header__site-link" href="../"><i class="icon-home"></i>&nbsp;<span style="margin-top: 8px;font-size: 15px;">Home</span></a></div>
            </header>
            <section class="ps-items-listing">
                <div class="ps-section__actions"><a class="ps-btn success" href="add-vehicle.php"><i class="icon icon-plus mr-2"></i>New Vehicles</a></div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>V_Name</th>
                                    <th>Type</th>
                                    <th>Price/Day</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sno = 0;
                                while ($item = mysqli_fetch_assoc($exec)) {
                                    $sno++;
                                    $vname = $item['vname'];
                                    $vtype = $item['vtype'];
                                    $vstatus = $item['status'];
                                    $vrate = $item['vrate'];
                                    $date = $item['date'];
                                    $pid = $item['vid'];
                                ?>
                                    <tr>
                                        <td><?php echo $sno ?></td>
                                        <td><?php echo $date ?></td>
                                        <td><a href="#"><strong><?php echo $vname ?></strong></a></td>
                                        <td><?php echo $vtype ?></td>
                                        <td><strong><?php echo $vrate ?></strong></td>
                                        <td><span class="ps-badge success"><?php echo $vstatus ?></span></td>
                                        <td>
                                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="edit.php?id=<?php echo $pid ?>">Edit</a><a class="dropdown-item" href="index.php?del_id=<?php echo $pid ?>">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <?php
    if ($del == 1) {
        echo "<script>Swal.fire({
				icon: 'success',
				title: 'Hurray',
				text: 'Item has be deleted.',
			});</script>";
    }
    ?>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>