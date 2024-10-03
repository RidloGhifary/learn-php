<?php

$success = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $file_name = $_FILES['upload_file']['name'];
  $file_type = $_FILES['upload_file']['type'];
  $file_size = $_FILES['upload_file']['size'];
  $file_tmp_name = $_FILES['upload_file']['tmp_name'];
  $file_error = $_FILES['upload_file']['error'];

  if (move_uploaded_file($file_tmp_name, __DIR__ . "/file/" . $file_name)) {
    $success = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
    <h1>Upload File</h1>
    <table>
      <tr>
        <td>File Name</td>
        <td><?= $file_name ?></td>
      </tr>
      <tr>
        <td>File Type</td>
        <td><?= $file_type ?></td>
      </tr>
      <tr>
        <td>File Size</td>
        <td><?= $file_size ?></td>
      </tr>
      <tr>
        <td>File Tmp Name</td>
        <td><?= $file_tmp_name ?></td>
      </tr>
      <tr>
        <td>File Error</td>
        <td><?= $file_error ?></td>
      </tr>
    </table>
    <hr>
  <?php } ?>

  <form action="upload-file.php" method="post" enctype="multipart/form-data">
    <label for="upload_file">File :
      <input type="file" name="upload_file" id="upload_file">
    </label>
    <br>
    <input type="submit" value="Upload">
  </form>

  <script>
    <?php if ($success) { ?>
      alert("File uploaded successfully!");
    <?php } ?>
  </script>
</body>

</html>