<!-- 
formattedQuery.php 
-->
<?php
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Source
    'jdiploma',                                 // Username
    '123'                                       // Password
);

// Return arrays with keys tat are the name of the fields
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Formatted Query
$query = 'SELECT * FROM elevatorNetwork WHERE nodeID = :nodeID';      // ':' IDs parameter
$statement = $db->prepare($query);                                  // Create statement from query text
$statement->bindValue('nodeID', 1);                                 // Replace :nodeID with 1 
$result = $statement->execute();                                    // Execute parametrized query
$rows = $statement->fetchAll();                                     // Returns all rows as arrays

// $rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
foreach($rows as $row) {
    var_dump($row);
    echo "<br/><br/>";
}
?>