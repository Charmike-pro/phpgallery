<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palautesivu</title>
</head>
<body>
    <h1>Kuvat</h1>
    <?php
    include('data.xml');
    $files = glob("uploads/*.*");
    for ($i = 0; $i < count($files); $i++) {
        $image = $files[$i];
        echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
        echo '<img src="' . $image . '" width="350" height="300" alt="Image sent By user" />' . "<br /><br />";
    
    }
    
    ?>
<div class="right">
    <form method="post">
    <p>Kirjoita tiedoston nimi...</p>
<input type="text" name="photoname2" placeholder="Kirjoita tiedoston nimi...">
<input onclick='window.location.reload(true);' type="submit" name="submit" value="Hyväksy">
</form>

<?php
if (isset($_POST['submit'])) 
{
$photoname2 = $_POST['photoname2'];
if (rename("uploads/$photoname2", "uploads/accepted/$photoname2"))
  {
  echo ("Accepted $photoname2");
  }
else
  {
  echo ("Error accepting $photoname2");
  }
}
?>
<script>
function goBack() {
    location.reload();
}, 300);
</script>
<form method="post" action="delete.php">
<input type="text" name="photoname" placeholder="Kirjoita tiedoston nimi..."> 
<input type="submit" name="submit" value="Poista">
</form>

</div>

</body>
</html>