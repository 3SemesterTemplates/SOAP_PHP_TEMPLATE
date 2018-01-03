<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Stadiums</title>
</head>
<body>
<h1>Stadiums</h1>
<?php
$client = new SoapClient("http://soapnatascha.azurewebsites.net/Service1.svc?wsdl");

$result = $client->GetMovie();
print_r($result);


$movieNames = $result/*->StadiumNamesResult->string*/;
//print_r($stadiumNames->StadiumNamesResult);

foreach ($movieNames as $titel) {

    echo "<h2>" . $titel . "</h2>";

    $resultDetail = $client->GetMovie(array('Titel' => $titel));
    $details = $resultDetail;
    print_r($details);
    echo "Titel " . $details->Titel . "<br />";
    echo "Rating " . $details->Rating . "<br />";
    //print_r($resultDetail);
}
?>
</body>
</html>