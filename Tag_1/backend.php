<?php

$arr = array();
$arr['success'] = true;
$arr['error'] = false;
$arr['POST'] = $_POST;
$arr['GET'] = $_GET;

http_response_code(200);
header('Content-Type: application/json; charset=utf-8');

echo json_encode($arr);