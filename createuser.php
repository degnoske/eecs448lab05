
<?php
require('db.php');

$db = new db();
$db->connect();




//Get Persons
//$query = "SELECT * FROM  `Persons` LIMIT 0 , 30";

//Insert Query
$user_id = $_GET['username'];
if($user_id!=NULL){
    $query = "INSERT INTO  `degnoske`.`Persons` (`id` ,`user_id`) VALUES (NULL ,  '" . $user_id . "');";
}
else{ echo "Your username was not saved"; }

if ($result = $db->query($query)) {


    /* fetch associative array */
    //while ($row = $result->fetch_assoc()) {
    //    printf ("%s (%s)\n", $row["user_id"]);
    //}

    /* free result set */
    $result->free();
}

/* close connection */
$db->close();
?>
