<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>#ID</th>
            <th>name</th>
            <th>email</th>
        </thead>
        <?php foreach($users as $user){ ?>

        <tbody>
            <td><?php echo"$user[userid]" ?></td>
            <td><?php echo"$user[username]" ?></td>
            <td><?php echo"$user[useremail]" ?></td>
            <td><a href="delete/<?php echo "$user[userid]"?>">Delete</a></td>
            <td><a href="edit/<?php echo "$user[userid]"?>">edit</a></td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>