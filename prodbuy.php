<?php

$pagename='Product Buy';

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename. "</title>";

echo "<body>";

include('headfile.html');

include("db.php");

echo "<h4>".$pagename."</h4>";

$prodid = $_GET['u_prod_id'];
echo "<p> Selcted prodict ID: ".$prodid."</p>";

include('footer.html');

echo "</body>" ;
?>