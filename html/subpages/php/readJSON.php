<!-- 
 SENG73000 
 readJSON.php
 By:Joshua Diploma
 Purpose: read JSON file practice
 -->

 <?php
    $booksJson = file_get_contents('../json/books.json');
    $booksArray = json_decode($booksJson, true);
    foreach ($booksArray as $book) {
        echo "Title: " . $book["title"] . ", Author: " . $book["author"] . "<br/>";
    }
 ?>