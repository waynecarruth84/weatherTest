<form action="index.php" method="post" id="formpost" >
    <input type="text" size="30" id="input" name="place">
    <input type="submit" value="place">
    <div id="livesearch"></div>
</form>
<?php

if(!isset($place)){
    $place = "Dublin,IE";
} else{
    $place = $_POST['place'];
}

$curl = curl_init();

curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt_array($curl, [
    CURLOPT_URL => "https://community-open-weather-map.p.rapidapi.com/find?q=" . $place . "&cnt=1&mode=null&lon=0&type=link%2C%20accurate&lat=0&units=imperial%2C%20metric",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: community-open-weather-map.p.rapidapi.com",
        "x-rapidapi-key: 5b81b816c9msh29122ec85fdd9c8p184b66jsn6ea96ca3e6d1"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$object = json_decode($response, true);
if(isset($object)){
    foreach ($object as $object){
        print_r($object);
    }
}
else {
    error_log( 'cURL Error #:' . $err, 3, 'C:\Users\Wayne The Goat\PhpstormProjects\weatherTest\var\tmp\my-errors.log');
}
?>



