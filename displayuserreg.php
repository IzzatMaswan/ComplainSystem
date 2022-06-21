<?php
include 'config.php';

echo "<table border = '1'><tr><th>Username</th><th>Registeration Date</th></tr>";


$result = mysqli_query($link, "SELECT id, username, created_at FROM `users` ");
while ($row = mysqli_fetch_row($result)){
    echo "<tr>";
    foreach ($row as $cell)
        echo "<td>$cell</td>";
    echo "</tr>";
}

mysqli_free_result ($result);
mysqli_close($dbc);

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
    <a href="adminpage.php" class="btn btn">Back to main page</a>
</body>
</html>