<?php

include "config.php";

include "controllers/HomeController.php";
use HomeController;
include "controllers/Auth/AuthorizationController.php";
use AuthorizationController;

include "system/classes/Framework.php";
use Framework;

include "models/Product.php";
use Product;
include "models/Page.php";
use Page;
include "models/Auth/Authorization.php";
use Authorization;

if(empty($_GET)) {
    // default page
    HomeController::index();
} elseif ($_GET['auth'] == 'login') {
    // authorization page
    AuthorizationController::index();
} elseif ($_GET['auth'] == 'registration') {
    // registration page
} else {
    echo "Silence is golden...";
}