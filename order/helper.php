<?php

function redirect($url) {
    header("Location: $url");
    exit;
}

function redirectHome() {
    redirect('ad_order.php');
}