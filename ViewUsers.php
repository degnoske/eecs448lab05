<?php
require('db.php');

$db = new db();
$db->connect();




//Get Persons
$query = "SELECT * FROM  `Persons` LIMIT 0 , 30";

if ($result = $db->mysqli->query($query)) {



    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        print_r($row["user_id"]);
        echo '<br/>';

    }

    /* free result set */
    $result->free();
}


?>