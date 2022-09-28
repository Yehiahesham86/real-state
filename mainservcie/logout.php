<?php

session_start();
session_destroy();

    setcookie('usercookie',null, -1, '/'); 
    echo("<script> window.open('../userservice/index.php', '_self')</script>");





?>