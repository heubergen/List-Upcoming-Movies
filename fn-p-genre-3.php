<?php
function genre_trans_3($g3, $id) 
    {
    include 'sql_con.php';
        switch ($g3) {
            case "28":
            $conn->query("UPDATE `tbl_movie` SET genre3='Action' WHERE `id`='$id'");
            break;
            case "12":
            $conn->query("UPDATE `tbl_movie` SET genre3='Adventure' WHERE `id`='$id'");
            break;
            case "16":
            $conn->query("UPDATE `tbl_movie` SET genre3='Animation' WHERE `id`='$id'");
            break;
            case "35":
            $conn->query("UPDATE `tbl_movie` SET genre3='Comedy' WHERE `id`='$id'");
            break;
            case "80":
            $conn->query("UPDATE `tbl_movie` SET genre3='Crime' WHERE `id`='$id'");
            break;
            case "99":
            $conn->query("UPDATE `tbl_movie` SET genre3='Documentary' WHERE `id`='$id'");
            break;
            case "18":
            $conn->query("UPDATE `tbl_movie` SET genre3='Drama' WHERE `id`='$id'");
            break;
            case "10751":
            $conn->query("UPDATE `tbl_movie` SET genre3='Family' WHERE `id`='$id'");
            break;
            case "14":
            $conn->query("UPDATE `tbl_movie` SET genre3='Fantasy' WHERE `id`='$id'");
            break;
            case "10769":
            $conn->query("UPDATE `tbl_movie` SET genre3='Foreign' WHERE `id`='$id'");
            break;
            case "36":
            $conn->query("UPDATE `tbl_movie` SET genre3='Historie' WHERE `id`='$id'");
            break;
            case "27":
            $conn->query("UPDATE `tbl_movie` SET genre3='Horror' WHERE `id`='$id'");
            break;
            case "10402":
            $conn->query("UPDATE `tbl_movie` SET genre3='Music' WHERE `id`='$id'");
            break;
            case "9648":
            $conn->query("UPDATE `tbl_movie` SET genre3='Mystery' WHERE `id`='$id'");
            break;
            case "10749":
            $conn->query("UPDATE `tbl_movie` SET genre3='Romance' WHERE `id`='$id'");
            break;
            case "878":
            $conn->query("UPDATE `tbl_movie` SET genre3='Science Fiction' WHERE `id`='$id'");
            break;
            case "10770":
            $conn->query("UPDATE `tbl_movie` SET genre3='TV Movie' WHERE `id`='$id'");
            break;
            case "53":
            $conn->query("UPDATE `tbl_movie` SET genre3='Thriller' WHERE `id`='$id'");
            break;
            case "10572":
            $conn->query("UPDATE `tbl_movie` SET genre3='War' WHERE `id`='$id'");
            break;
            case "37":
            $conn->query("UPDATE `tbl_movie` SET genre3='Western' WHERE `id`='$id'");
            break;
            default:
            $conn->query("UPDATE `tbl_movie` SET genre3='new_genre' WHERE `id`='$id'");
        }
    }
?>