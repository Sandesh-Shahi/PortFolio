<?php
$db = new mysqli('sql112.epizy.com', 'epiz_30745598', 'aen3JtDjgqG', 'epiz_30745598_tutorial11');

if ($db->connect_errno) {
    echo $db->connect_error;
    echo ('Sorry, Database connection error.');
} else {
    $message = "You have connected SuccessFully.";
}
?>