<?php
//ÖVNING 1

//"HTTP/1.0 404 Not Found"
function status_header($code = 200) {
    $messages = [
        200 => "OK",
        500 => "Server Error"
    ];
    header("HTTP/1.0 $code " .$messages[$code]);
}
status_header(200);


//ÖVNING 2

// [header => värde]
// Connection: keep-alive
function headers(array $headers = []) {
    foreach ($headers as $header => $value){
        header("$header: $value");
    }
}

headers([
    "Connection" => "Upgrade"
    "johan"      => "victor"
]);


//ÖVNING 3

function redirect($url, $code = 302) {
    header('Location: ' . $url, true, $code);
    die();
}

// $code = 302
//redirect("https://google.se");

// $code = 301
//redirect("https://google.se", 301);
