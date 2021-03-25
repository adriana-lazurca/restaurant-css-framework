<?php
// //if upload button is pressed
// if (isset($_POST['upload'])) {
//   // $file = $_FILES["image"];
//   // echo ("hello here");
//   //path to store the upload image
//   $target = "images/" . basename($_FILES['image']['name']);
//   //connect to database
//   $dataBase = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
//   //get submitted data from the form

// }

// Connect to DB
include '../DB/dbConnection.php';

//Check FORM is submitted
$status = $statusMsg = '';
if (isset($_POST["submit"])) {
  $status = 'error';
  $imageName = $_FILES["image"]["name"];
  if (!empty($imageName)) {
    // Get file info 
    $fileName = basename($imageName); //the base of file
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); //extension file

    // Allow certain file formats 
    $allowedTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowedTypes)) {
      $image = $_FILES['image']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image));

      // Insert image content into database 
      $insert = $dataBase->query("INSERT into gallery (Image, Uploaded) VALUES ('$imgContent', NOW())");
      if ($insert) {
        $status = 'success';
        $statusMsg = "File uploaded successfully.";
      } else {
        $statusMsg = "File upload failed, please try again.";
      }
    } else {
      $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
    }
  } else {
    $statusMsg = 'Please select an image file to upload.';
  }
}
// Display status message 
echo $statusMsg;


?>


<!-- FORM -->
<form method="post" action="" enctype="multipart/form-data">

  <label>Upload Image File:</label><br>
  <input name="image" type="file">
  <input type="submit" value="UploadImage" name="submit">

</form>

<?php
// Get image data from database 
$imagesResult = $dataBase->query("SELECT Image FROM gallery ORDER BY Uploaded DESC");
?>


<?php
//Display images
if ($imagesResult->rowCount() > 0) {
?>
  <div class="gallery">
    <?php while ($row = $imagesResult->fetch()) {
      $encodedImage = base64_encode($row['Image']);
    ?>
      <img src="data:image;charset=utf8;base64,<?php echo $encodedImage; ?>" />
    <?php } ?>
  </div>
<?php } else { ?>
  <p class="status error">Image(s) not found...</p>
<?php } ?>