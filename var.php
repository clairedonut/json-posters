<?php

  // custom variable names

  // names
  $brand = "POSTERS";

  // routes
  $pageHome = "index.php";


  // json data
  $url = 'json/data.json'; // path to your JSON file
  $data = file_get_contents($url); // put the contents of the file into a variable
  $posters = json_decode($data); // decode the JSON feed
?>
