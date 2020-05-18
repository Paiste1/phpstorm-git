<?php
$str = simplexml_load_file('simple.xml');

echo '<pre>';
var_dump($str);

/*$xml = new SimpleXMLElement($str);

echo $xml->name; //выведет 'Коля'
echo $xml->age; //выведет 25
echo $xml->salary; //выведет 1000*/