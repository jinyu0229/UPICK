<?php

session_start();

unset($_SESSION['loginUser']);

header("Location: ../member/login.php");

// WEPICK 登出