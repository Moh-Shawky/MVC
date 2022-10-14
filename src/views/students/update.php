<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/student/update" method="post">
        <input type="hidden" name="userid" value="<?php echo"$user[userid]" ?>">
        <label>Name</label>
        <input type="text" name="username" value="<?php echo"$user[username]" ?>">
        <label>email</label>
        <input type="email" name="useremail" value="<?php echo"$user[useremail]" ?>">
        <label>password</label>
        <input type="password" name="userpassword">
        <input type="submit">
    </form>
</body>
</html>