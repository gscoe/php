<?php
session_start();
unset($_SESSION['username1']);//注销用户名
unset($_SESSION['nc']);//注销昵称
echo json_encode(true);//返回结果
2
