<?php 
    //load php files
    include 'sql_con.php';
    //Prepare variable
    $movieid = $_GET['movieid'];
    $tolist = $_GET['tolist'];
    //Save setting in DB
    $conn->query("UPDATE `tbl_movie` SET `list` ='$tolist' WHERE `id`='$movieid'");
    // execute the sql command
    echo "Success!";
    // Close MySQL Connection
    $conn = null;
?>