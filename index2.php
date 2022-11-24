<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" name="" id="field">

<button type="button" onclick="btnFn(this,1);">1</button>
<button type="button" onclick="btnFn(this,2);">2</button>

<button type="button" onclick="btnFn(this,3);">3</button>

<button type="button" onclick="btnFn(this,4);">4</button>

<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script>
    // $(document).ready(function () {
    
    // });
    function btnFn(obj,id){
        // console.log(id);
        $('#field').val(id)
    }
</script>
</body>
</html>