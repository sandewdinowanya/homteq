<?php

$pagename='Product Buy';

echo "<title>".$pagename. "</title>";

echo "<body>";

include('headerfile.php');

include("db.php");

echo "<h4>.$pagename.</h4>";

$prodid = $_GET('u_prod_id');
echo "<p> Selcted prodict ID: ".$prodid."</p>";

?>