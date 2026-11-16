<?php
$names = array(
  "s1" => "achu",
  "s2" => "renju",
  "s3" => "amal",
  "s4" => "babu"
);
echo "<center>";
echo "<h2>Original Student list</h2>";
echo "<pre>";
print_r($names);
echo "</pre>";
asort($names);
echo "<h2>Ascending order</h2> <br>";
echo "<pre>";
print_r($names);
echo "</pre>";
arsort($names);
echo "<h2>descending order: </h2><br>";
echo "<pre>";
print_r($names);
echo "</pre>";
echo "</center>";
?>
