<?php
include('phpscripts/connection.php');
$password = "cryptoservice";
$password = hash('sha256', $password);
echo "$password";
//value = 977302936afc03b7637c7e0acd6273fd80a9898e01733251fa589d058206ee88;
$username="astroadmin";
?>