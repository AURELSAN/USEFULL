<?php
   // read Codefile
   $TheCode = file_get_contents("index.php");

   // Print it...
   echo htmlentities($TheCode);
?>
