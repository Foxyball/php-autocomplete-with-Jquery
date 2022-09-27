<?php
include('../connect.php');

//same as
//$dbhost = 'localhost';
//$dbuser = 'root';
//$dbpass = '';
//$db = '';

//$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn);

function searchAutocomplete($conn , $term){   
    $query = "SELECT * FROM forum WHERE title LIKE '%".$term."%' ";
    $result = mysqli_query($conn, $query);  
    $ress = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $ress;   
}

if (isset($_GET['term'])) {
    $searchTerm = searchAutocomplete($conn, $_GET['term']);
    $getTerms = array();

    foreach($searchTerm as $st){
        $getTerms[] = $st['title'];
    }
    echo json_encode($getTerms);
}

?>
