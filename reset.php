<?php
session_start();

if (session_start())
{echo" <p> im in reset</p>";}
session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>