<html>
<head>
<title>Hello , mr singh</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<link rel="stylesheet" type="text/css" href="par.css">
</head>
<body>
	<form action="index1.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	Title<input type="text" name="txt">
	<input type="submit" name="submit">
    </form>

    
</body>
	