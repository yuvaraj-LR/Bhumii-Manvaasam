<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['fullname'])) {
    header("Location: login.php");
}
$pageId = "index";
$classId = "index";

if (isset($_GET['pageId'])) {
    $pageId = $_GET['pageId'];
} else {
    $pageId = "index";
}
if (isset($_GET['classId'])) {
    $classId = $_GET['classId'];
} else {
    $classId = "";
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./image/fav_icon.png" type="image/png" />
    <title>Bhumii Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="./admin/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="./admin/css/dashboard.css" type="text/css" />
    <script src="./admin/js/jquery.min.js"></script>
    <script src="./admin/js/richtext.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./admin/js/sweetalert.js"></script>
    <script src="./admin/js/custom.js"></script>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <?php include "./student/components/sidebar.php"; ?>
        <div class="page-wrapper">
            <nav class="navbar navbar-expand-sm bg-white shadow-sm">
                <div class="container-fluid">
                    <h2 class="navbar-brand">Bhumii Courses Portal</h2>
                    <ul class="navbar-nav ms-auto d-flex align-items-center px-2">
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="https://localhost/bhumi-dk/admin/img/varun.png" alt="user-img" width="36" class="img-circle" />
                                <span class="font-medium">
                                    Lakshmanan R
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="dynamic-content" style="background-color: var(--bg-gray-200)">
                <?php
                if ($pageId == "index") {
                    include "./student/components/classrooms.php";
                } else if ($pageId == "class") {
                    include "./student/components/class.php";
                } else if ($pageId == "helpcenter") {
                    include "./student/components/helpcenter.php";
                }
                ?>
            </div>
            <footer class="footer text-center bg-white shadow-sm"> Created by <a href="#">Bhumii</a></footer>
        </div>
    </div>
</body>

</html>