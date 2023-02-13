<?php

$valid_key = "09c6aS48VCA0sa6d";

if (isset($_GET["key"]) && $_GET["key"] === $valid_key) {

  echo $_GET["key"] . " is valid";

} else {

  echo "Invalid key";

}

?>
