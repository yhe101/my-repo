<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BDIplus</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/careers.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/careers.js"></script>	
</head>
<body class="upload-body">
<!--<html>
<head>
<title>File Upload Form</title>
</head>
<body>
This form allows you to upload a file to the server.<br>
<form action="getfile.php" method="post" enctype=”multipart/form-data”><br>
Type (or select) Filename: <input type="file" name="uploadFile">
<input type="submit" value="Upload File">
</form>
</body>
</html>-->
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="col-sm-3" style="margin-left:0;padding-left:0;">Select file (doc,docx) to upload:</div>
    <div style="float:left;"><input type="file" name="fileToUpload" id="fileToUpload"></div>
	<div style="float:left;"><input type="submit" value="Upload Resume" name="submit" class="btn btn-info"></div>
</form>
</body>
</html>