<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <h1>Valitse kuva</h1>
  <p>Hyväksymme vain .JPG, .PNG, .JPEG ja .GIF tiedostotyypit.</p>
  <br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>