<?php 
//session_start();
include_once("../Entity/Admin.php");
include_once("../Repo/adrepo.php");
$admin=new Admin();
$repo=new AdminRepo();
$admin->setEmail($_SESSION["email"]);
$admin=$repo->Get($admin);
