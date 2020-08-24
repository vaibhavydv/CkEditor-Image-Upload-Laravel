<!DOCTYPE html>
<html>
<head>
    <title>Ckeditor Image Upload - by Vaibhav</title>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>
  
<h1>Ckeditor Image Upload - by Vaibhav</h1>
<textarea name="editor1"></textarea>
   
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
   
</body>
</html>
