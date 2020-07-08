<?php
include_once 'src/User.php';
include_once 'src/UserManager.php';

$userManager = new UserManager('data.json');
$users = $userManager->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
<a href="view/add.php">Add</a>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
    </tr>
    <?php foreach ($users as $key => $user): ?>
    <tr>
        <td><?php echo $user->getId() ?></td>
        <td><?php echo $user->getName() ?></td>
        <td><?php echo $user->getAddress() ?></td>
        <td><a onclick="return confirm('ban chac chan muon xoa?')" href="action/delete.php?id=<?php echo $key ?>">Delete</a></td>
    </tr>

    <?php endforeach; ?>
</table>

</body>
</html>