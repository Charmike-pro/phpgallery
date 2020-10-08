<?php 
$xml = simplexml_load_file('data.xml');
?>

<?php foreach ($xml->picture as $pic):?>
    <div>
        <h2><?php echo $pic->author; ?></h2>
        <img src="uploads/<?php echo $pic->file;?>" alt="kuva" />
        <p><?php echo $pic->date; ?></p>
        <?php if ($pic->attributes()['piilota'] == "false"): ?>
        <a href="">Piilota</a>
        <?php else: ?>
            <a href="">Näytä</a>
        <?php endif; ?>
        </div>


<?php endforeach; ?>