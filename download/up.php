<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
</head>
<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" action="submit.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
      <span class="file-name">Android:</span>
      <label for="file-upload"><input type="file" id="file-upload" name="uploadedFile"></label>
    </div>
	<div class="upload-wrapper">
      <span class="file-name">Password:</span>
      <label for="file-upload"><input type="password" name="password"/></label>
    </div>
	
    <input type="submit" name="android" value="UPLOAD" />
  </form>
  
  <br><br>
  
  <form method="POST" action="submit.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
      <span class="file-name">iOS:</span>
      <label for="file-upload"><input type="file" id="file-upload" name="uploadedFile"></label>
    </div>
	<div class="upload-wrapper">
      <span class="file-name">Password:</span>
      <label for="file-upload"><input type="password" name="password"/></label>
    </div>
 
    <input type="submit" name="ios" value="UPLOAD" />
  </form>
</body>
</html>