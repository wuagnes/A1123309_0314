<?php
if(isset($_COOKIE["userName"])){
    echo "WELCOME BACK, ".$_COOKIE["userName"];
}
?>

<head>
    <title>LOGIN</title>
</head>

<body>
    <h1>LOGIN</h1>
    <form action="logincheck.php" method="post">
        Please input your username: <input type="text" name="userName"><br>
        Please input your password: <input type="password" name="userPwd"><br>
        <input type="submit"><br>
    </form>

    <?php
    date_default_timezone_set("Asia/Taipei");
    echo "<br>";
    echo date("Y-m-d H:i:s");
    ?>
</body>