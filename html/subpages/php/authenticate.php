<!-- 
 SENG73000 
 authenticate.php
 By:Joshua Diploma
 Purpose: authentication by php
 -->
<?php

    $submitted = !empty($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<p>Form submitted successfully (1 for true): $submitted </p>";
    echo "<p>Username received: $username </p>";
    echo "<p>Password received: $password </p>";

    $booksJson = file_get_contents('../json/books.json');
    $booksArray = json_decode($booksJson, true);
    foreach ($booksArray as $book) {
        echo "Title: " . $book["title"] . ", Author: " . $book["author"] . "<br/>";
    }


    // test_write_json.php

    // 1. Sample data to write
    $data = [
    'USERNAME'   => $username,
    'PASSWORD' => $password
    ];

    // 3. Target file path
    $file ='../json/users.json';

    if (file_exists($file)) {
    $json  = file_get_contents($file);
    $users = json_decode($json, true);
    if (! is_array($users)) {
        $users = [];
    }
    } else {
    $users = [];
    }

    $user[] = $data;

    $encJSON = json_encode($user, TRUE);

    // 4. Write JSON to file with exclusive lock
    if (file_put_contents($file, $encJSON, $flags==FILE_APPEND) === false) {
        die('Failed to write to ' . $file);
    }

    // 5. Success message
    echo "Successfully wrote to data.json:\n";
    echo $json;
?>

