<html>
<head>

</head>
<body>
<?php
require('db.php');

$db = new db();
$db->connect();

$user_id = $_GET['user'];
$query = "SELECT content FROM posts WHERE author_id='$user_id'";

if ($result = $db->mysqli->query($query)) {
    $array1 = $result->fetch_all();
}
?>
<table>
    <thead>
        <tr>
            <th>#</th><th>Content</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($array1 as $index => $content):
    ?>
        <tr>
            <td><?= $index + 1; ?></td>
            <td><?= $content[0]; ?></td>
        </tr>
    <?php
    endforeach;

$db->close();
?>
</body>
</html>
