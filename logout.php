<?php

session_start();

include("db.php");

// create a variable called $pagename
$pagename="Smart Basket";

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

// call in stylesheet
echo "<title>".$pagename."<title>";

echo "<body>";

// include header layout file
include ("headfile.html");

include("detectlogin.php");

// display name of the page on the web page
echo "<h4>".$pagename."</h4>";

echo "<p> Thank you, ".$_SESSION['fname']." ".$_SESSION['sname']."</p>";
unset($_SESSION);
session_destroy();
echo "<br><p>You are now logged out</p>";

// include head layout
include ("footer.html");

echo "</body>";
?>