<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="p_upload.php" method="post" enctype="multipart/form-data">
  <input accept="image/*" type='file' id="imgInp" name="img"/>
  <img id="blah"/>
</form>
<input type="submit">
<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
</body>
</html>