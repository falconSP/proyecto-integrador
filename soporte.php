<?php

require_once("clases/validator.php");
require_once("clases/auth.php");
require_once("clases/db-json.php");
require_once("clases/db-mysql.php");

$db = new MySQL();
$auth = new Auth();
$validator = new Validator();

?>