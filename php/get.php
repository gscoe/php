<?php
include_once ("connect.php");
session_start();/*开启会话*/
if (isset($_SESSION['username1'])){
   /* 判断用户会话里用户名是否存在,用户是否登录*/
    $json['nc']=$_SESSION['nc0'];/*把昵称存起来，一会返回给首页*/
    $json['flag']=true;/*用户已经登录，标志flag为true*/
}else
    $json['flag']=false;/*用户已经登录，标志flag为true*/
echo json_encode($json);/*返回json*/
