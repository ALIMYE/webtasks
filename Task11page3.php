<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'DB';
    $conn = mysqli_connect($host, $user, $password, $db);

    if (isset($_POST['name'])) {
        $login = $_POST['name'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM admins WHERE username='$login' 
        && pass='$pass'";

        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['login'] = $login;
            $_SESSION['admin'] = $row['admin'];
        }
        header('location: ../week11/task3.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="task11page1.php" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <input type="submit">
</form>

</body>
</html>