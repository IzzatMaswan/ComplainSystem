<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Form</title>
</head>
<body>
        <form action="user.php" method = "post">
        <p><b>Name</b><input type="text" size="12" maxlength="12" name="name"></p>
        <p><b>Email Address:</b> <input type="text" size="12" maxlength="36" name="email"></p>
        <p><b>Gender</b>
        <input type="radio" name="gender" value="M"/> Male 
        <input type="radio" name="gender" value="F"/> Female
        </p>
        <p><b>Age:</b>
        <select name="age" >
            <option value="0-30">Under 30</option>
            <option value="30-60">Between 30 to 60</option>
            <option value="60+">over 60</option>
        </select></p>
        <p><b>Complain:</b><textarea name="complain" cols="50" rows="3"></textarea></p>
        <div align="center"><input type="submit" name="submit" value="Submit Information"/>
        </div>
    </form>
</body>
</html>