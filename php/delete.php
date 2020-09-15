<html>
<body onload="goBack();">
<?php
if (isset($_POST['submit'])) 
{
$photoname = $_POST['photoname'];
if (!unlink("uploads/$photoname"))
  {
  echo ("Error deleting $photoname");
  }
else
  {
  echo ("Deleted $photoname");
  }
}
?>
<script>
setTimeout(function goBack() {
  window.open("display.php");
}, 300);
</script>
</html>