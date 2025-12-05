<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <button name="set">set</button>
    <button name="display">display</button>
    <button name="delete">delete</button>
    </form>
    
    <a href="1h.html">home</a>
</body>
</html>
<?php
if(isset($_POST["set"])){
setcookie("nazwa", "wartość", time()+120);
};

if(isset($_POST["display"])){
$w = $_COOKIE["nazwa"];
echo $w;
};

if(isset($_POST["delete"])){
setcookie("nazwa", "wartość", time()-120);
};
?>