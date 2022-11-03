<?php
    session_start();
if(array_key_exists('id', $_COOKIE)) {
$_SESSION['id'] = $_COOKIE['id']; //stay logged in for long time
echo "<h3>welcome dear," .$_SESSION['name']."</h3>";
}

if(array_key_exists('id', $_COOKIE) or array_key_exists('id', $_SESSION)) {
    echo "<h2> congratulations, you are a registered user! <a href = index.php?logout=1>
    log out </a></h2>";
} else {
    header("location: index.php");
}
?>

<html>
    <h3><a href="index.php">go back</a></h3>
</html>