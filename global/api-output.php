<?php

function json_output($data, $message = 'Results from database fetched!', $status = true) {
    if($status == 1 || $status == true)
        $status = true;
    else
        $status = false;
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
    $data = array(
        'data' => $data,
        'count' => count($data),
        'status' => $status,
        'message' => $message
    );
    echo json_encode($data, true);
    die();
}