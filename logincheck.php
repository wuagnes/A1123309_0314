<?php
session_start();
?>

<head>
    <title>Login Check</title>
</head>

<body>
<h1>Login Result</h1>

<?php
$userName ='nuk';
$userPwd ='123456';
$adminName ='a1123309';
$adminPwd ='3309';

$loginName = $_POST["userName"];
$loginPwd = $_POST["userPwd"];

if ($userName == $loginName && $userPwd == $loginPwd) {
    echo "Login success, Hello user!";
    $_SESSION["check"] = 1;
    $cookiedate = time() + 60 * 60 * 24; 
    setcookie("userName", $userName, $cookiedate, "/");  
    header("Location: regist.php");
    exit();  
} else if ($adminName == $loginName && $adminPwd == $loginPwd) {
    echo "Login success, Hello Admin!";
    $_SESSION["check"] = 1;
    $cookiedate = time() + 60 * 60 * 24; 
    setcookie("userName", $adminName, $cookiedate, "/");
    header("Location: regist.php");
    exit();
} else {
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
    exit();
}
?>
</body>