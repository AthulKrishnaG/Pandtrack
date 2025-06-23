<?php
session_start();
unset($_SESSION["uEmail"]);
if(session_destroy())
{
header("Location: ../index.php");
}
?>
