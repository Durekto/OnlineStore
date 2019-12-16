<?php

include "config.php";

include "controllers/HomeController.php";
use HomeController;

include "system/classes/Framework.php";
use Framework;

include "models/Product.php";
use Product;
include "models/Page.php";
use Page;

if(empty($_GET)) {
     HomeController::index();
}
else {
    echo "Silence is golden...";
}