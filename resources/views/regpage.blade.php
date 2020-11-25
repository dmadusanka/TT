<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/createuser" method="POST">
        @csrf
        <label for="fname">User Name:</label><br>
        <input type="text" id="user" name="user"><br>
        <label for="lname">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Create User">
    </form> 
    
</body>
</html>
