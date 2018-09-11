<html> 
<head>
<title>This will cause a conflict!</title>
<script type="text/javascript">
           $("#fileSelector").change(function(){
            //itna samjha aya?
            //jQuery selector pata hai?
            //# means id
            //. means class
            //us id k change pe
            var selected_files = this.files; //this gives as an array, with all the selected files, ok?

            //We need the first file form selected files, right?
            var ourFile = selected_files[0];

            console.log("Selected file is: "+ourFile.name)


            //but we can nto save in db with this. after refresh it will be gone..
            //so we will need to upload the file in uploads folder
            //and save its url in our db
            //example dikhata hu..ok?

            //itna clear?  ha.. ok.. now where do you want the selected image to apear?
            //for 

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
