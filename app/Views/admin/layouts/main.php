<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shreyu.coderthemes.com/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 19:47:59 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Horizontal Layout | Shreyu - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

    <!-- App css -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="admin/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="admin/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <?= $this->include('admin/layouts/header') ?>
        </div>
        <!-- end Topbar -->

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <?= $this->include('admin/layouts/menu') ?>
                        </ul> <!-- end navbar-->
                    </div> <!-- end .collapsed-->
                </nav>
            </div> <!-- end container-fluid -->
        </div> <!-- end topnav-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <?= $this->renderSection('content') ?>

                </div> <!-- container -->

            </div> <!-- content -->

            <?= $this->include('admin/layouts/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="admin/assets/js/vendor.min.js"></script>

    <!-- optional plugins -->
    <script src="admin/assets/libs/moment/min/moment.min.js"></script>

    <script src="admin/assets/js/main.js"></script>

    <?= $this->renderSection('js') ?>

    <!-- App js -->
    <script src="admin/assets/js/app.min.js"></script>

</body>

<!-- Mirrored from shreyu.coderthemes.com/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 19:47:59 GMT -->

</html>