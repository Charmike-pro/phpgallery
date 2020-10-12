<?php 
$xml = simplexml_load_file('data.xml');
?>
    <link rel="stylesheet" href="css/style.css">
<?php
$id = 0;
foreach ($xml->picture as $pic):?>
    <div>
        <h2><?php echo $pic->author; ?></h2>
        <img src="uploads/<?php echo $pic->file;?>" alt="kuva"/>
        <p><?php echo $pic->date; ?></p>
        <?php if ($pic->attributes()['piilota'] == 'true'): ?>
        <a href="toggle_hidden.php?id=<?php echo $id; ?>" target="_blank">Näytä</a>
        <?php else: ?>
            <a href="toggle_hidden.php?id=<?php echo $id; ?>" target="_blank">Piilota</a>
        <?php endif; ?>
        <?php $id++; ?>
        </div>

<?php endforeach; ?>
