<?php

// Don't forget to set permissions: chmod 777
file_put_contents("position.txt", $_GET["latitude"] . "," . $_GET["longitude"]);

echo "PHP response: success!";
