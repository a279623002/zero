<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<input id="file" type="file" accept="image/*" onchange='changeFile()'>

<script>
changeFile: function () {
　　let myFile = document.getElementById('file').files[0] // 获取图片内容
}
</script>
</body>
</html>