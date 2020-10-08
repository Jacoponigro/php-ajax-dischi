<?php
include "src/partialsphp/db.php";
header('Content-Type: application/json');
echo json_encode($database);
?>
