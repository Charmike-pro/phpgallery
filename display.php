<!DOCTYPE html>
<html>
<body>
  <link rel="stylesheet" href="style.css">

<?php
     $files = glob("uploads/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
            echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
             echo '<img src="'.$image .'" alt="Random image" height="500" width="650" />'." <br /><br />";
            } else {
                continue;
            }
          }
       ?>
       
</body>
</html>