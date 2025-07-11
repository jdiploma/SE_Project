<!-- 
staticInsert.php 
-->
<?php
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Source
    'jdiploma',                                 // Username
    '123'                                       // Password
);

// Return arrays with keys tat are the name of the fields
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Insert static data
$query = 'INSERT INTO elevatorNetwork
        (date, time, nodeID, status, currentFloor, requestFloor, otherInfo) VALUES
        ("2029-05-05", "12:01:06", 6, 2, 1, 1, "na")';

$result = $db->exec($query);

if($result == false) {
    $error = $db->errorInfo();
    echo "Echo: " . $error[2];
} else {
    var_dump($result);
}

$rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
foreach($rows as $row) {
    var_dump($row);
    echo "<br/><br/>";
}
?>