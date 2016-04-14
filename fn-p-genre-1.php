<?php
function genre_trans_1($g1, $id) 
    {
    include 'sql_con.php';
        switch ($g1) {
            case "28":
            $conn->query("UPDATE `tbl_movie` SET genre1='Action' WHERE `id`='$id'");
            break;
            case "12":
            $conn->query("UPDATE `tbl_movie` SET genre1='Adventure' WHERE `id`='$id'");
            break;
            case "16":
            $conn->query("UPDATE `tbl_movie` SET genre1='Animation' WHERE `id`='$id'");
            break;
            case "35":
            $conn->query("UPDATE `tbl_movie` SET genre1='Comedy' WHERE `id`='$id'");
            break;
            case "80":
            $conn->query("UPDATE `tbl_movie` SET genre1='Crime' WHERE `id`='$id'");
            break;
            case "99":
            $conn->query("UPDATE `tbl_movie` SET genre1='Documentary' WHERE `id`='$id'");
            break;
            case "18":
            $conn->query("UPDATE `tbl_movie` SET genre1='Drama' WHERE `id`='$id'");
            break;
            case "10751":
            $conn->query("UPDATE `tbl_movie` SET genre1='Family' WHERE `id`='$id'");
            break;
            case "14":
            $conn->query("UPDATE `tbl_movie` SET genre1='Fantasy' WHERE `id`='$id'");
            break;
            case "10769":
            $conn->query("UPDATE `tbl_movie` SET genre1='Foreign' WHERE `id`='$id'");
            break;
            case "36":
            $conn->query("UPDATE `tbl_movie` SET genre1='Historie' WHERE `id`='$id'");
            break;
            case "27":
            $conn->query("UPDATE `tbl_movie` SET genre1='Horror' WHERE `id`='$id'");
            break;
            case "10402":
            $conn->query("UPDATE `tbl_movie` SET genre1='Music' WHERE `id`='$id'");
            break;
            case "9648":
            $conn->query("UPDATE `tbl_movie` SET genre1='Mystery' WHERE `id`='$id'");
            break;
            case "10749":
            $conn->query("UPDATE `tbl_movie` SET genre1='Romance' WHERE `id`='$id'");
            break;
            case "878":
            $conn->query("UPDATE `tbl_movie` SET genre1='Science Fiction' WHERE `id`='$id'");
            break;
            case "10770":
            $conn->query("UPDATE `tbl_movie` SET genre1='TV Movie' WHERE `id`='$id'");
            break;
            case "53":
            $conn->query("UPDATE `tbl_movie` SET genre1='Thriller' WHERE `id`='$id'");
            break;
            case "10572":
            $conn->query("UPDATE `tbl_movie` SET genre1='War' WHERE `id`='$id'");
            break;
            case "37":
            $conn->query("UPDATE `tbl_movie` SET genre1='Western' WHERE `id`='$id'");
            break;
            default:
            $conn->query("UPDATE `tbl_movie` SET genre1='new_genre' WHERE `id`='$id'");
        }
    }
?>