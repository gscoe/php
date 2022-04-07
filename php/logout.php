<?php
session_start();
unset($_SESSION['usernam0e']);//注销用户名
unset($_SESSION['nc']);//注销昵称
echo json_encode(true);//返回结果
