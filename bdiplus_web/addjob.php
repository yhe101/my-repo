<?php
session_start();
?>
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
</head>
<body>
<?php
$servername = "50.62.209.2:3306";
$username = "bdidev";
$password = "1bdidev-";
/*$servername = "localhost";
$username = "root";
$password = "password";*/
$dbname = "bdidb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bdi_candidate_dtls (candidate_name, candidate_addr, candidate_phone, candidate_email, candidate_linkedin, candidate_resume_file_name, req_id)
VALUES ('".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['linkedin']."','".$_SESSION["filename"]."',".$_POST['jobid'].")";

//echo "INSERT INTO bdi_candidate_dtls (candidate_name, candidate_addr, candidate_phone, candidate_email, candidate_linkedin, candidate_resume_file_name, req_id) VALUES ('".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['linkedin']."','".$_SESSION["filename"]."',".$_POST['jobid'].")";


if (mysqli_query($conn, $sql)) {
    echo "<p class='success-msg'>Details saved. Thanks for showing interest in the job opening. We will review your resume and contact your shortly.</p>";
} else {
    echo "<p class='error-msg'>Your details could not be saved. Pls try again. </p>";
}

mysqli_close($conn);
?>
</body>
</html>