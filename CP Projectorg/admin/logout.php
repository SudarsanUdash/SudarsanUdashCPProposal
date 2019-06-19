<?php


unset($_SESSION);
session_destroy();
session_commit();
    header('location: index.php?session=Logout');
    $msg = "log out success";

?>