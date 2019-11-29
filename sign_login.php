<?php
session_start();
include 'connection.php';

if(!isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html style="zoom:150%;">
  <head>
  <style>
.button {
  background-color: rgb(59,89,152);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styling.css">
    <title>Invalid Credentials</title>
    <link rel="shortcut icon" href="./webimages/icon.jpg">
  </head>
  <body>
  <nav>
     <div>
    ChatterBox
     </div>
   </nav>
      <div id="heading2">
      <h1 align="center"><font color="red">Invalid Username OR Password.</font></h1>
      <br>
      </div>
      <div align="center">
      <button class="button" type="button" onclick="window.location.href = 'index.php';">Go back to homepage.</button>
      </div>     
  </body>
</html>
<?php
}
else
{
  header('LOCATION:message.php');
}
?>

