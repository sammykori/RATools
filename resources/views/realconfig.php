<?php
// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("towers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

$connection=mysqli_connect ('localhost', "root", '');
if (!$connection) {  die('Not connected : ' . mysqli_error());}

// Set the active MySQL database

$db_selected = mysqli_select_db($connection,'nca_std_db');
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}

// Select all the rows in the markers table

$query = "SELECT * FROM towers LIMIT 25";
$result = mysqli_query($connection,$query);
if (!$result) {
  die('Invalid query: ');
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("tower");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("company",$row['company']);
  $newnode->setAttribute("site-id",$row['site_id']);
  $newnode->setAttribute("district", $row['district']);
  $newnode->setAttribute("location", $row['location']);
  $newnode->setAttribute("status", $row['status']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
}

echo $dom->saveXML();

?>