<?php
  $newPath = "/";
  $data = explode("/",$_SERVER['PATH_INFO']);
  if (sizeof($data) == 5 ) {
    if (preg_match("/[1-9]+-(.*)/i", $data[4], $matches)) {
      $newPath = "/posts/" . str_replace("testng_gui", "testng-gui", str_replace("-", "_", $matches[1]));
    }
  }
#  echo "<pre>";
#  echo $data . "\n";
#  echo $data[0] . " -- " . $data[1] . " -- " . $data[4] . "\n";
#  echo sizeof($data) . "\n";
#  echo $newPath . "\n";
#  echo "</pre>";
  header( 'Location: http://dwayneb.free.fr' . $newPath ) ;
?>