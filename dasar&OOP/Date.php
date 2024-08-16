<?php
$result = new DateTime();
$result->setDate(2001, 5, 10);
$result->setTime(12, 45, 30);
$result->add(new DateInterval("P1Y"));
$result->add(new DateInterval("P2M"));
$result->add(new DateInterval("P3D"));

$result->add(new DateInterval("PT3M"));
$result->add(new DateInterval("PT1H"));

$minesTime = new DateInterval("PT12S");
$minesTime->invert = 1;

$mines = new DateInterval("P2Y");
$mines->invert = 1;

$result->add($mines);
$result->add($minesTime);
$result->setTimezone(new DateTimeZone("Asia/Jakarta"));

var_dump($result);
echo PHP_EOL;

echo "Waktu saat ini adalah : ".$result->format("Y|m|d h:i:s").PHP_EOL;

$Date = DateTime::createFromFormat("Y-m-d H:i:s", "2003-07-12 23:41:12", new DateTimeZone("Asia/Jakarta"));

 var_dump($Date);

?>