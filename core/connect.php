<?php
include ('options.php');
$dbh = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port, $user, $pass);