<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palautesivu</title>
</head>
<body>


<?php 
$xml = simplexml_load_file('data.xml');
?>

<?php foreach ($xml->picture as $pic):?>
    <div>
    <?php if ($pic->attributes()['piilota'] == "false"): ?>
        <h2><?php echo $pic->author; ?></h2>
        <img src="uploads/<?php echo $pic->file;?>" alt="kuva" />
        <p><?php echo $pic->date; ?></p>
        <?php endif; ?>
        </div>
<?php endforeach; ?>


</body>
</html>