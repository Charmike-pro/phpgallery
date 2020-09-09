<!DOCTYPE html>
<html>
<body>
  <link rel="stylesheet" href="style.css">
  <script src="scripts.js"></script>
<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="center">
  <h1>Valitse kuva</h1>
  <p>We only accept .JPG .PNG .GIF AND .JPEG file formats.</p>
  <br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <label for="maker">Tekijä:</label>
  <input type="text" id="maker" name="maker"><br><br>
  <label for="subject">Kuvan aihe:</label>
  <input type="text" id="subject" name="subject"><br><br>
  <br>
  <input onfocus="cry()" type="submit" value="Upload Image" name="submit">
</form>
</div>
</body>
</html>