<!-- 
formattedInsert.php 
-->

<?php
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Source
    'jdiploma',                                 // Username
    '123'                                       // Password
);

// Return arrays with keys tat are the name of the fields
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Static queries for data and time

$querytime = "SELECT CURRENT_TIME()";
$result = $db->query($querytime);
$currtime = $result->fetch()['CURRENT_TIME()'];
var_dump($currtime);

$querydate = 'SELECT CURRENT_DATE()';
$result = $db->query($querydate);
$currdate = $result->fetch()['CURRENT_DATE()'];
var_dump($currdate);

// Insert static data
$query = 'INSERT INTO elevatorNetwork
        (date, time, status, currentFloor, requestFloor, otherInfo) VALUES
        (:date, :time, :status, :currentFloor, :requestFloor, :otherInfo)';
$statement = $db->prepare($query);

$params = [  // This data can come from the $_GET or $_POST array
    'date' => $currdate,
    'time' => $currtime,    // must be unique
    'status' => 1,
    'currentFloor' => 1,
    'requestFloor' => 2,
    'otherInfo' => 'na'
];

$result = $statement->execute($params);
var_dump($result);

$rows = $db->query('SELECT * FROM elevatorNetwork');
foreach($rows as $row) {
    var_dump($row);
    echo "<br/><br/>";
}
?>