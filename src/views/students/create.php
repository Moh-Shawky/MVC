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
    <form action="store" method="post">
        <label>Name</label>
        <input type="text" name="username">
        <label>email</label>
        <input type="email" name="useremail">
        <label>password</label>
        <input type="password" name="userpassword">
        <input type="hidden" name="usergov" value="1">
        <input type="hidden" name="usercou" value="1">
        <input type="hidden" name="role" value="1">
        <input type="submit">
    </form>
</body>
</html>