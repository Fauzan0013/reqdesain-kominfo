<?php

session_start();
$_SESSION['id_user'];
$_SESSION['username'];
$_SESSION['id_role'];


if ($_SESSION['id_role'] == "2") {
   unset($_SESSION["nama"]);
   unset($_SESSION["id_user"]);
   unset($_SESSION["username"]);
   unset($_SESSION["id_role"]);
} else {
   unset($_SESSION["id_user"]);
   unset($_SESSION["username"]);
   unset($_SESSION["id_role"]);
}


session_unset();
session_destroy();

echo "<meta http-equiv='refresh' content='0; url=index'>";
