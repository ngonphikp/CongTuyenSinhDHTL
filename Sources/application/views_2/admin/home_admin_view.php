<?php
    include_once "head_admin_view.php";
?>
    <!-- Nav -->
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php include_once "nav_admin_view.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="me-admin-menu">
                    <?php include_once "menu_admin_view.php"; ?>
                </div>
                <div class="me-admin-content">
                    <?php include "dashboard_admin_view.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 me-footer-admin">
                    <?php include_once "footer_admin_view.php"; ?>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once "foot_admin_view.php";
?>