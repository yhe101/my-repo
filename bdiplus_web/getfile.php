<html>
<head>
<title>Process Uploaded File</title>
</head>
<body>

<?php


print_r($_FILES);

if(isset($_POST['submit']))
{
 if(move_uploaded_file ($_FILES['uploadFile'] ['tmp_name'],"../uploads/{$_FILES['uploadFile'] ['name']}"))
  {   
        echo "File uploaded <br />";

        }
        else {
              echo "Something went Wrong 1!!<br/>";
            }
}
       else {
              echo "Something went Wrong 2!!<br/>";
            }

/*$upload_dir="../uploads";
$target_file="";
$tmp_file="";
if(isset($_POST['submit']))
{

        $tmp_file=$_FILES['uploadFile']['tmp_name'];
        $target_file=basename($_FILES['uploadFile']['name']);
            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file))
        {   
        echo "File uploaded <br />";

        }
        else {
              echo "Something went Wrong !!<br/>";
            }
}*/
?>
</body>
</html>

