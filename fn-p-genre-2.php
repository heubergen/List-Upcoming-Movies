<?php
function genre_trans_2($g2, $id) 
    {
    include 'sql_con.php';
        switch ($g2) {
            case "28":
            $conn->query("UPDATE `tbl_movie` SET genre2='Action' WHERE `id`='$id'");
            break;
            case "12":
            $conn->query("UPDATE `tbl_movie` SET genre2='Adventure' WHERE `id`='$id'");
            break;
            case "16":
            $conn->query("UPDATE `tbl_movie` SET genre2='Animation' WHERE `id`='$id'");
            break;
            case "35":
            $conn->query("UPDATE `tbl_movie` SET genre2='Comedy' WHERE `id`='$id'");
            break;
            case "80":
            $conn->query("UPDATE `tbl_movie` SET genre2='Crime' WHERE `id`='$id'");
            break;
            case "99":
            $conn->query("UPDATE `tbl_movie` SET genre2='Documentary' WHERE `id`='$id'");
            break;
            case "18":
            $conn->query("UPDATE `tbl_movie` SET genre2='Drama' WHERE `id`='$id'");
            break;
            case "10751":
            $conn->query("UPDATE `tbl_movie` SET genre2='Family' WHERE `id`='$id'");
            break;
            case "14":
            $conn->query("UPDATE `tbl_movie` SET genre2='Fantasy' WHERE `id`='$id'");
            break;
            case "10769":
            $conn->query("UPDATE `tbl_movie` SET genre2='Foreign' WHERE `id`='$id'");
            break;
            case "36":
            $conn->query("UPDATE `tbl_movie` SET genre2='Historie' WHERE `id`='$id'");
            break;
            case "27":
            $conn->query("UPDATE `tbl_movie` SET genre2='Horror' WHERE `id`='$id'");
            break;
            case "10402":
            $conn->query("UPDATE `tbl_movie` SET genre2='Music' WHERE `id`='$id'");
            break;
            case "9648":
            $conn->query("UPDATE `tbl_movie` SET genre2='Mystery' WHERE `id`='$id'");
            break;
            case "10749":
            $conn->query("UPDATE `tbl_movie` SET genre2='Romance' WHERE `id`='$id'");
            break;
            case "878":
            $conn->query("UPDATE `tbl_movie` SET genre2='Science Fiction' WHERE `id`='$id'");
            break;
            case "10770":
            $conn->query("UPDATE `tbl_movie` SET genre2='TV Movie' WHERE `id`='$id'");
            break;
            case "53":
            $conn->query("UPDATE `tbl_movie` SET genre2='Thriller' WHERE `id`='$id'");
            break;
            case "10572":
            $conn->query("UPDATE `tbl_movie` SET genre2='War' WHERE `id`='$id'");
            break;
            case "37":
            $conn->query("UPDATE `tbl_movie` SET genre2='Western' WHERE `id`='$id'");
            break;
            default:
            $conn->query("UPDATE `tbl_movie` SET genre2='new_genre' WHERE `id`='$id'");
        }
    }
?>