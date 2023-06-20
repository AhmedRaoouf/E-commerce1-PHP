
<?php

$conn = new mysqli("localhost", "root", "", "SB_admin2");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
return $conn;
    


