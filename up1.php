<?php
include("mysqlconnect.php");

    function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

if (!empty($_FILES["file"]["name"])) {
    $file_name=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $imgtype=$_FILES["file"]["type"];
    $ext= GetImageExtension($imgtype);
    $target_path = "image/thumb".$ext;

if(move_uploaded_file($temp_name, $target_path)) {
	$txt=$_POST['txt'];
    $query_upload="INSERT into image('name','tittle') VALUES
('".$target_path."','".$txt."')";
    mysql_query($query_upload) or die("error in $query_upload == ".mysql_error()); 
}else{
   exit("Error While uploading image on the server");
}
}
?>
