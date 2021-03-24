<?php
//if upload button is pressed
if (isset($_POST['upload'])) {
  // $file = $_FILES["image"];
  // echo ("hello here");
  //path to store the upload image
  $target = "images/" . basename($_FILES['image']['name']);
  //connect to database
  $dataBase = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
  //get submitted data from the form

}

?>

<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="image">
  <input type="submit" value="Upload Image" name="upload">
  <!-- <input type="hidden" name="size" value="100000">
<div>
    <input type="file" name="image">
</div>
<div>
    <textarea name="text" cols="40" rows="4"></textarea>
</div>
<div>
    <input type="submit" name="upload" value="upload">
</div> -->

</form>