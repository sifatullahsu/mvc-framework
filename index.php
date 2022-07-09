<?php
include 'inc/header.php';

include 'system/libs/main.php';
include 'system/libs/main_ctrl.class.php';



// controller/model/parameter

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
$url = rtrim($url, '/');
$url = explode('/', filter_var($url, FILTER_SANITIZE_URL));

if (count($url) == 3) {

    $controller = $url[0];
    $model      = $url[1];
    $parameter  = $url[2];

    include "app/controllers/" . $controller . ".class.php";

    $ctrl = new $controller;
    $ctrl->$model($parameter);
} else {

    // Set default index controller

    include "app/controllers/index.class.php";
    $ctrl = new index;
}










?>
<div class="min-hight">





</div>
<?php





include 'inc/footer.php';