<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once '../src/User.php';
    include_once '../src/UserManager.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $user = new User($id, $name, $address);
    $userManager = new UserManager('../data.json');
    $userManager->add($user);
    header('location: ../index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Id:
    <input type="text" name="id">
    Name:
    <input type="text" name="name">
    Address:
    <input type="text" name="address">
    <button type="submit">Add</button>
</form>
    
</body>
</html>
