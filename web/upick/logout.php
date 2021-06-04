<?php

session_start();

unset($_SESSION['loginUser']);

header("Location: ../member/login.php");

// UPICK 登出