<?php
// Connect to DB
include '../DB/dbConnection.php';

//Delete row
try {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteRow = "DELETE FROM gallery WHERE id=$id";
    $dataBase->exec($deleteRow);

    header("Refresh:0; url=messages.php");
  }
} catch (PDOException $e) {
  echo $deleteRow . "\n" . $e->getMessage();
}

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
      $insert = $dataBase->query("INSERT into gallery (Image, Uploaded, File_Name) VALUES ('$imgContent', NOW(), '$fileName')");
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
<form class="mt-4" method="post" action="" enctype="multipart/form-data">

  <label>UPLOAD IMAGE:</label><br>
  <input style="border:1px solid black" name="image" type="file">
  <input type="submit" value="UploadImage" name="submit">

</form>

<?php
// Get image data from database 
$imagesResult = $dataBase->query("SELECT Image FROM gallery ORDER BY Uploaded DESC");

//Retrieve data
$response = $dataBase->query('SELECT Id, Uploaded, File_Name FROM gallery ORDER BY ID DESC LIMIT 0, 10');

?>
<!-- CREATE TABLE -->
<table class="table mt-4">
  <thead>
    <tr>
      <th>Date</th>
      <th>File Name</th>
      <th>Delete</th>
    </tr>
  </thead>

  <?php
  // Display messages
  while ($data = $response->fetch()) {

  ?>
    <tbody>
      <tr>
        <td> <?php echo ($data['Uploaded']) ?> </td>
        <td> <?php echo ($data['File_Name']) ?> </td>
        <td>
          <a href="messages.php?id=<?php echo ($data['Id']) ?>">
            <i class='fa fa-trash'></i>
          </a>
        </td>
      </tr>
    </tbody>

  <?php
  }
  ?>
</table>


<?php
//Display images
if ($imagesResult->rowCount() > 0) {
?>
  <div class="gallery">
    <?php while ($row = $imagesResult->fetch()) {

    ?>

    <?php } ?>
  </div>
<?php } else { ?>
  <p class="status error">No image found</p>
<?php } ?>