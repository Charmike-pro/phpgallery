<?php 

if (!isset($_GET['id'])) {
    die('Ei asiaa tänne');
}

$id = intval($_GET['id']);

$xml = simplexml_load_file('data.xml');

$picture_count = count($xml->picture);

if ($id >= $picture_count) {
    die('Id on mitä sattuu');
}
?>

<?php
if ($xml->picture[$id]->attributes()['piilota'] == 'true') {
    $xml->picture[$id]->attributes()['piilota'] = 'false';
} else {
    $xml->picture[$id]->attributes()['piilota'] = 'true';
}
     // Muotoilu ja tallennus
     $dom = new DOMDocument("1.0");
     $dom->preserveWhiteSpace = false;
     $dom->formatOutput = true;
     $dom->loadXML($xml->asXML());
     $dom->save('data.xml');
?>
<script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
window.close();
}
</script>
<body onload="windowClose()">
</body>