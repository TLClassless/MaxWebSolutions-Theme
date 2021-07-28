<?php

if (isset($_POST['submit']))
{
    if (
        (!isset($_POST['name'])) ||
        (!isset($_POST['phone'])) ||
        (!isset($_POST['time'])) ||
        (!isset($_POST['email'])) ||
        (!isset($_POST['msg'])) &&
        ($_POST['name'] == "") ||
        ($_POST['phone'] == "") ||
        ($_POST['email'] == "") ||
        ($_POST['msg'] == "")
        ) 
    {
        $error = "*" . "Please fill all the required fields";
    }
    else
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $time = $_POST['time'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        echo $name, ' ', $phone, ' ', $time, ' ', $email, ' ', $msg;
    }
}

header('Location: /wordpress/');
exit;
?>
