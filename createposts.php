
<?php
require('db.php');

$db = new db();
$db->connect();




//Get Persons
//$query = "SELECT * FROM  `Persons` LIMIT 0 , 30";

//Insert Query
$user_id = $_GET['username'];
$content = $_GET['post'];
if($user_id!=NULL && $content!=NULL){
    $query = "INSERT INTO  `degnoske`.`Persons` (`id` ,`user_id`) VALUES (NULL ,  '" . $user_id . "');";
    $query = "INSERT INTO  `degnoske`.`posts` (`post_id` ,`content`,`author_id`) VALUES (NULL ,  '" . $content ."', '" . $user_id . "');";
}
else{ echo "Your username was not saved"; }

if ($result = $db->query($query)) {

    echo $result;
    echo PHP_EOL;
    print_r($result);
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
