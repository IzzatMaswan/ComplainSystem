<?php 
#Script handle form

if (strlen($_POST["name"]) >0)
    { 
    $_POST["name"] = $_POST["name"];
    }
else
    {
    $_POST["name"]= null;
    echo '<p><b> You Forgot to Enter Your Name! </b></p>';
    }


if (strlen($_POST["comments"]) >0) 
    { 
    $_POST["comments"] = $_POST["comments"]; 
    }
else
    {
    $_POST["comments"]= null;
    echo '<p><b> You Forgot to Enter Your Comments! </b></p>';
    }
if(! (strlen($_POST["email"]) >0)) 
    {
    $_POST["email"] = null;
    echo '<p><b> You Forgot to Enter Your Emails! </b></p>';
    }


if (isset($_POST["gender"])) 
    {
    if ($_POST["gender"] == 'M') 
    {
        $message = '<b><p>Good Day, Sir </b></p>';
    }
    if ($_POST["gender"] == 'F') 
    {
        $message = '<b><p>Good Day, Madam </b></p>';
    }
}else{
        $_POST["gender"] = null;
        echo '<p><b> You Forgot to Choose Your Gender! </b></p>';
    }


if ($_POST["name"] && $_POST["comments"] && $_POST["email"] && $_POST["gender"]) 
    { echo "Thank you," .$_POST["name"]. " for the following comments: <br /> <tt>" .
    $_POST["comments"]. " </tt> <p> We will reply to you at <i>" . $_POST["email"]. 
    "</i></p>"; 
    echo $message;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        <p><b>Comments:</b><textarea name="comments" cols="50" rows="3"></textarea></p>
        <div align="center"><input type="submit" name="submit" value="Submit Information"/>
        </div>
    </form>
</body>
</html>