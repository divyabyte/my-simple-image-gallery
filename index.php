<html> 
<head>
<title>This will cause a conflict!</title>
<script type="text/javascript">
           $("#fileSelector").change(function(){
           
            var selected_files = this.files; 

            var ourFile = selected_files[0];

            console.log("Selected file is: "+ourFile.name);

        });
</script>

<link rel="stylesheet" type="text/css" href="par.css">
</head>
<body class=>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" id="fileSelector" name="file">
		<input type="submit" name="submit" value="upload image">
		<button><a href="/mygallery/upload.php">View Images</button>
    </form>

    
</body>
