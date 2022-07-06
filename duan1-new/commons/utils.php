<?php
const BASE_URL = "http://localhost:81/Duan1-Nhom5/DuAn1-Nhom5/duan1-new/";
const ADMIN_URL = BASE_URL . 'cp-admin/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const ADMIN = BASE_URL . 'public/uploads/';
const CLIENT = BASE_URL . 'public/';
// const CLIENT_URL = BASE_URL . '';


function client_render($view, $data = []){
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}

function admin_render($view, $data = [], $jsFile = null){
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
?>