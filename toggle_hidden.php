<?php 
$xml = simplexml_load_file('data.xml');
?>

<?php
if ($xml->picture[0]->attributes()['piilota'] == 'true') {
    $xml->picture[0]->attributes()['piilota'] = 'false';
} else {
    $xml->picture[0]->attributes()['piilota'] = 'true';
}
     // Muotoilu ja tallennus
     $dom = new DOMDocument("1.0");
     $dom->preserveWhiteSpace = false;
     $dom->formatOutput = true;
     $dom->loadXML($xml->asXML());
     $dom->save('data.xml');
?>