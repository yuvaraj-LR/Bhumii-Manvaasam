<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $apiUrl  = "https://localhost/bhumi-dk/admin/api/v1.php";
    $baseUrl  = "https://localhost/bhumi-dk/";
    $adminBaseUrl  = "https://localhost/bhumi-dk/admin/";
    $webAddress = "https://localhost/bhumi-dk/";
    $codesDirectory = "F:\\xampp5\\htdocs\\bhumi-dk\\code/";
    $uploadsDirectory = "F:\\xampp5\\htdocs\\bhumi-dk\\admin\\uploads\\";
    $baseDirectory = "F:\\xampp5\\htdocs\\bhumi-dk\\";
} else {
    $apiUrl  = "https://manvaasam.com/BhumiDk/admin/api/v2.php";
    $baseUrl  = "https://manvaasam.com/BhumiDk/";
    $adminBaseUrl  = "https://manvaasam.com/BhumiDk/admin/";
    $webAddress = "https://manvaasam.com/BhumiDk/";
    $uploadsDirectory = "/home4/manvaasa/public_html/BhumiDk/admin/uploads/";
}



$getErrorCode =  array("code" => "#101", "description" => "Get request not allowed.");
$postErrorCode =  array("code" => "#102", "description" => "Post request not allowed.");
$invalidRequestErrorCode =  array("code" => "#103", "description" => "Invalid request.");
$invalidTokenErrorCode =  array("code" => "#104", "description" => "Invalid token.");
$invalidUsernameErrorCode =  array("code" => "#105", "description" => "Invalid username.");
$unauthorizedErrorCode =  array("code" => "#105", "description" => "Unauthorized access.");
$invalidIdErrorCode =  array("code" => "#106", "description" => "Invalid id.");
$invalidEmailErrorCode =  array("code" => "#107", "description" => "Invalid email.");
$invalidPasswordErrorCode =  array("code" => "#108", "description" => "Invalid password.");
$invalidPhoneErrorCode =  array("code" => "#109", "description" => "Invalid phone.");
$invalidNameErrorCode =  array("code" => "#110", "description" => "Invalid name.");
$invalidCategoryErrorCode =  array("code" => "#111", "description" => "Invalid category.");
$invalidUserOrPass =  array("code" => "#112", "description" => "Invalid username or password.");
$somethingWentWrong =  array("code" => "#113", "description" => "Something went wrong.");
$permissionDenied =  array("code" => "#114", "description" => "Permission denied.");
$fileNotFound =  array("code" => "#115", "description" => "File not found.");
$pleaseFillAll =  array("code" => "#116", "description" => "Please fill all the fields.");
$successErrorCode =  array("code" => "#200", "description" => "Success.");

$webName = "Bhumi";
$webLogo = $webAddress . "/img/logo-white.png";