<?php

$api_location = 'http://www.fantasyfootballnerd.com/service/';
$api_format = 'json/';
//$api_key = 'test/'; // test for test api data otherwise our api key is jfxxayi4nbg9
$api_key = 'jfxxayi4nbg9/';


function getApiData($service_name) {
    global $api_location, $api_format, $api_key;
    $url = $api_location . $service_name . '/' . $api_format . $api_key;
    return file_get_contents($url);
}

/*************************************************
 * This code handles url requests for this API.
 ************************************************/
if($_GET["action"] == "printTable"){
    $json_string = json_encode(getApiData($_GET["service_name"]), JSON_PRETTY_PRINT);
    print $json_string;
}

elseif($_GET['action'] == "getJson")
    //echo 'getting json';
    print getApiData($_GET["service_name"])

?>