<!DOCTYPE html>
<html>
<head>
    <title>Hide and Show Image</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<body>

<button id="hide">Hide</button>
<button id="show">Show</button><br><br>

<img id="img" src="aa.jpg" width="200">

<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#img").hide();
    });
    $("#show").click(function(){
        $("#img").show();
    });
});
</script>

</body>
</html>
