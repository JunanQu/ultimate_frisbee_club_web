<?php
include("includes/init.php");

$current_page_id="photos";
const PHOTO_UPLOADS_PATH = "images/";

if (isset($_POST["upload"])) {
  $upload_info = $_FILES["photo_upload"];
  if ($upload_info['error'] == UPLOAD_ERR_OK) {
    $image_name = basename($upload_info["name"]);
    $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_ext = strtolower($image_ext);


    $sql = "INSERT INTO photos (photo_name, photo_ext, uploader_id) VALUES (:photo_name, :photo_ext, :uploader_id);";
    $params = array(
      ':photo_name' => $image_name,
      ':photo_ext' => $image_ext,
      ':uploader_id' =>$current_user_id
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      $image_id = $db->lastInsertId("id");
      $path = PHOTO_UPLOADS_PATH . $image_id . "." . $image_ext;
      move_uploaded_file($upload_info["tmp_name"], $path);
      record_message("Your file has been uploaded.");
    } else {
      record_message("Failed to upload file.");
    }
  }
}
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
    <script src="scripts/dropdown.js"></script>
    <title> Moments </title>
  </head>

  <body>
    <?php include("includes/header.php");?>


      <div class = 'center'>
        <?php
        $records = exec_sql_query($db, "SELECT * FROM photos")->fetchAll(PDO::FETCH_ASSOC);
        foreach($records as $record){
        if (isset($current_user)) {

        echo("<a href=\"deleteImage.php?id=$record[id]\" onClick=\"return confirm('Are you sure you want to delete this image?')\"><img class = table
        src = images/".$record['id'].".".$record["photo_ext"]."></a>");
      } else {
        echo("<img class = table alt = 'Fribee Website' src = images/".$record['id'].".".$record["photo_ext"].">");

      }
        }
        ?>

    <?php if (isset($current_user)) { ?>
    <div class = 'infoBoxSmall'>
      <h2 class = 'left'> Add Moments or Delete Images by Clicking on Image</h2>
      <form id="upload_photo" action="photos.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="MAX_FILE_SIZE" value="10000000">Upload Photo: </input>
          <input type="file" name="photo_upload" required></input>
          <input id = 'submit' type="submit" value="Add Photo" name="upload"/></input>
        </form>
      <?php } ?>
</div>
    <?php include("includes/footer.php");?>
  </body>

</html>
