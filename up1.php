<img id="imgFileUpload" alt="Select File" title="Select File" src="orange.png" style="cursor: pointer" />
<br />
<span id="spnFilePath"></span>
<input type="file" id="FileUpload1" style="display: none" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        var fileupload = $("#FileUpload1");
        var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
            var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
            filePath.html("<b>Selected File: </b>" + fileName);
        });
    });
</script>