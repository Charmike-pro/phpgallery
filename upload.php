<body onload="goBack();">
<link rel="stylesheet" href="style.css">
<br>
<h1>Kiitos!</h1>
<p>Etusivu aukeaa pian...</p>
<script>
setTimeout(function goBack() {
  window.history.back();
}, 3000);
</script>
</body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Create uploads folder if it doesn't exist
if (!file_exists('./uploads')) {
  mkdir('./uploads', 0777, true);
}

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
  echo "";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "";
  }
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Et tullut lomakkeelta!');
}

if (!isset($_POST['maker']) || !isset($_POST['subject'])) {
    die('Et tullut oikealta lomakkeelta!');
}


$nimi = $_POST['maker'];
$palaute = $_POST['subject'];
$kuva = $_FILES['fileToUpload']['name'];
$pvm = date("d.m.Y H:i");

$file = fopen('data.xml', 'a');
$rivi = "<p><b>Tekijä:</b> $nimi<br><b>Kuvan aihe:</b> $palaute<br><b>Tiedoston nimi: </b>uploads/$kuva<br>$pvm</p>" . PHP_EOL;
fwrite($file, $rivi);


?>