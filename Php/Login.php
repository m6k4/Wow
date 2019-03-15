<?php

include_once("../DataBase.php");
include_once("../App/User.php");
include_once("../App/Player.php");

$db = DataBase::getInstance();

?>
<pre>
    <?php
    session_start();
    ?>
</pre>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <meta charset="utf-8">
</head>

<body>

<?php if($user = $db->getUser($_POST['email'], $_POST['password'])):?>
    <p> Welcome <?php echo $user['name'] ?> </p>
    <?php
    $_SESSION['user'] = $user;
    $playerNumber = $_SESSION['user']['playerNumber'];
    ?>
    <p> Your player number is <?php echo $playerNumber; ?> </p>
    <p> <a href = "../html/menu.php" id = menu_link>Go to your panel</a></p>
    <?php $kasia = new Player('ania', 'ania@op.pl'); ?>
<?php else: ?>
    <p>Email or password is incorrect</p>
<?php endif ?>

</body>

</html>