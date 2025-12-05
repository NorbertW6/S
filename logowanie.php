<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="login" name="login" placeholder="wpisz hasło">
    <input type="password" id="password" name="password" placeholder="wpisz login">
    <button id="logBTN" name="logBTN">zaloguj</button>
    <button id="SingUpBTN" name="SingUpBTN">zarejestruj</button>
</body>
</html>

<?php
#logowanie
if(isset($_POST["logBTN"])){
    $login = $_POST["login"];
    $pswd = $_POST["password"];
    $conn = mysqli_connect("localhost", "root", "", "nazwa"); #dodaj nazwe
    $q = "SELECT login, haslo FROM users WHERE login = '$login' AND haslo = '$pswd'";
    $res = mysqli_query($conn, $q);
    if(mysqli_fetch_row($res)[0] != NULL){
        header("Location: mein_page.php");
    } else {
        echo "Nie ma takiego użytkownika";
    }
}

#rejestracja
if(isset($_POST["SingUpBTN"])){
    $login = $_POST["login"];
    $pswd = $_POST["password"];
    $conn = mysqli_connect("localhost", "root", "", "nazwa"); #dodaj nazwe
    $q = "INSERT INTO users(login, haslo) VALUES('$login', '$pswd')";
    $res = mysqli_query($conn, $q);
    if(mysqli_fetch_row($res)[0] != NULL){
        header("Location: mein_page.php");
    } else {
        echo "Nie ma takiego użytkownika";
    }
}
?>
