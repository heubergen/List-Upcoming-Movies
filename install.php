<!DOCTYPE html>
<html lang="en">
  <body>
<center><h1>Herzlich Willkommen</h1>
Bitte warten, Verbindung zur Datenbank wird hergestellt...<br>
<?php
//load sql_con.php file
include 'sql_con.php';
?>
Verbindung erfolgreich hergestellt<br>
Datenbanken werden erstellt und vorbereitet, bitte warten...<br>
<?php
    // clear all tables to prevent old data
    $conn->query('drop table if exists tbl_movie');
    $conn->query('drop table if exists tbl_set');
   // create the table tbl_movie
   $sql1 = "CREATE TABLE IF NOT EXISTS tbl_movie (
     id varchar(15) PRIMARY KEY,
     title text,
     link_href text,
     genre text,
     video_url text,
     rating text,
     rating_date date,
     de_cine date,
     de_hd date,
     en_cine date,
     en_hd date,
     date_rel date,
     list tinyint default '0'
   )";
   // execute the sql command
   $conn->exec($sql1);

   // create the table tbl_set
   $sql3 = "CREATE TABLE IF NOT EXISTS tbl_set (
    last_api_date date
   )";
   // execute the sql command
   $conn->exec($sql3);
   echo "Laden von aktuellen Daten aus API<br>";
   // Insert columne date in database
   $conn->query("INSERT INTO `tbl_set`(`last_api_date`) VALUES (CURDATE())");
   // load api files
            include 'api-calendar_upcoming.php';
            include 'api-rating.php';
            include 'api-release.php';
?>
Datenbanken wurden erfolgreich erstellt.<br>Klick auf den Button um weiterzufahren.
<?php
exec('touch installed');
$conn = null;
?>
  <form action="index.php" method="get" style="padding-top: 4%;">
  <input type="submit" value="Weiter">
  </form>
</center>
</body>
  </html>
