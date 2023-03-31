<?php
// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$who = $_POST['who'];

echo('je passe la');
var_dump('je passe la');
// connection to the database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=login', 'root', '');
} catch (Exception $e) {
    exit($e);
}

try {
    $sql = "INSERT INTO events (title, start, end) VALUES (:title, :start, :end )";
    $q = $bdd->prepare($sql);
    $q->execute(array(':title' => $title, ':start' => $start, ':end' => $end));
} catch (Exception $e) {
    exit($e);
}


// insert the records
?>
