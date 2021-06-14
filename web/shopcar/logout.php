<?php

session_start();

unset($_SESSION['loginUser']);

header("Location: ../member/login.php");

// 購物車 登出