<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Nepal Tourist Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>

                            </li>
                            <li>
                                <a href="allplaces.php">
                                    <i class="fas fa-list"></i>
                                    <span class="bot-line"></span>All places</a>
                            </li>
                             <li>
                                <a href="addplaces.php">
                                    <i class="fas fa-list"></i>
                                    <span class="bot-line"></span>Add places</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Categories</a>
                            </li>
                            <li class="has-sub">
                                <a href="review.php">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Reviews</a>
                               
                            </li>
                            <li class="has-sub">
                                <a href="users.php">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span>Users</a>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                           
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                           
                            <div class="setting-dropdown js-dropdown">
                               
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/admin.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
                <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->


            <!-- STATISTIC-->
                <div class="container" style="margin-top: 20px;">
                    <div class="row">
                        <div class="card-body card-block">
                            <form action="insert.php" method="post">
                                <div class="form-group"><strong><label for="name" class=" form-control-label">Name</label>
                                            </strong>
                                            <input type="text" id="vat" placeholder="Enter place name" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                           <strong> <label for="lat" class=" form-control-label">Latitude</label></strong>
                                            <input type="number" id="street" placeholder="Enter latitude" name="lat" class="form-control">
                                        </div>
                                    
                                        <div class="form-group">
                                           <strong> <label for="long" class=" form-control-label">Longitude</label></strong>
                                            <input type="number" id="city" placeholder="Enter longitude" name="long" class="form-control">
                                        </div>
                                       
                                        <div class="form-group">
                                           
                                            <strong> <label for="des" class=" form-control-label">Description</label></strong>
                                             <textarea rows="10" id="postal-code" placeholder="Enter place description here" name="desc" class="form-control"> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <strong><label for="attractions" class=" form-control-label">Attractions</label></strong>
                                            <textarea rows="7" id="country" placeholder="Enter main attractions" name="attractions" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                           <strong> <label for="climate" class=" form-control-label">Climate</label></strong>
                                            <textarea rows="4" id="country" placeholder="Enter climate of this place" name="climate" class="form-control"> </textarea>
                                        </div>
                                        <div class="form-group">
                                           <strong> <label for="route" class=" form-control-label">Route</label></strong>
                                             <textarea rows="4" id="country" placeholder="Enter route" name="route" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <strong><label for="hotels" class=" form-control-label">Hotels</label></strong>
                                           <textarea rows="4" id="country" placeholder="Enter popular hotels around" name="hotels" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <strong><label for="hotels" class=" form-control-label">Historical significance</label></strong>
                                           <textarea rows="4" id="country" placeholder="Enter historical significance of this place" name="significance" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <strong> <label for="time" class=" form-control-label">Best time to visit</label> </strong>
                                            <textarea rows="4" id="country" placeholder="Enter best time to visit" name="time" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <strong><label for="hotels" class=" form-control-label">Tags</label></strong>
                                           <textarea rows="4" id="country" placeholder="Enter tags" name="tag" class="form-control"></textarea>
                                        </div>
                                        <div style="margin-bottom: 20px;">
                                            <select class="selectpicker">
                                          <option>Category 1</option>
                                          <option>Category 2</option>
                                          <option>Category 3</option>
                                        </select>
                                        </div>
                                       
                                        <div>
                                             <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                        </div>

                            </form> 

                        </div>
                    </div>
                </div>
            <!-- END STATISTIC-->


            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->