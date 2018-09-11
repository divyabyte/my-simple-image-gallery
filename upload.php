<?php
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="par.css">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
</head>
<body>
</body>
</html>
<?php
include("image_signup.php");
$target_dir = "uploads/";
@$name=$_FILES["file"]["name"];
@$tmp_name=$_FILES["file"]["tmp_name"];
@$target_file = $target_dir.basename($_FILES["file"]["name"]);
$uploadOk = 1;


if(isset($_POST["submit"])) {
    if (file_exists($target_file) || $_FILES["file"]["size"] > 500000 ) 
{
    echo "file cannot upload";
    $uploadOk = 0;
}
else{
   if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($tmp_name , $target_file)) {
        $query=mysqli_query($con,"INSERT INTO image(img)VALUES('".$target_file."')");
        echo "The file ". basename( $name. " has been uploaded.");
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
}

$result=mysqli_query($con,"SELECT * FROM image ORDER BY id DESC");
while($row=mysqli_fetch_array($result)){
    echo '  
                          <tr>  
                               <td>  
                                    <a data-fancybox="gallery" href="'.($row['img'] ).'"><img src="'.($row['img'] ).'" height="200" width="200" class="img-thumnail" />  </a>
                               </td>  
                          </tr>  
                     ';  
}
?>
<form>
        <button><a href="/mygallery/index.php">upload More</button>
    </form>




