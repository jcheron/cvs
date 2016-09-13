<?php
session_start();
$user=$_SESSION["user"];
include "views/cvsUser.php";