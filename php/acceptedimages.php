<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palautesivu</title>
</head>
<body>
    <h1>Hyväksytyt kuvat</h1>
    <?php
    include('data.xml');
    $files = glob("uploads/accepted/*.*");
    for ($i = 0; $i < count($files); $i++) {
        $image = $files[$i];
        echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
        echo '<img src="' . $image . '" width="350" height="300" alt="Image sent By user" />' . "<br /><br />";
    
    }
    
    ?>
</body>
</html>