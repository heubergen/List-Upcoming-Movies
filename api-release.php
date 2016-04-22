<?php
//load sql_con.php file
include 'sql_con.php';
//connect with database
$stmt = $conn->query("SELECT UNIX_TIMESTAMP(date_rel) AS date, en_cine, en_hd, de_cine, de_hd, id FROM tbl_movie");
//unix timestamp -50 days
$minusfifty = strtotime('-50 days midnight');
//unix timestamp now
$minusnull = strtotime('now midnight');
//convert timestamp in compatible format for db
$datenullcomp = date("Y-m-d", $minusnull);
//base url for ext_info
$base = "https://api.xrel.to/v2/ext_info/info.json?id=";
//loop
  foreach ($stmt as $html_output) {
    //conditions
    if ((empty($html_output['date']) OR empty($html_output['en-cine']) OR empty($html_output['en-hd']) OR empty($html_output['de-cine']) OR empty($html_output['de-hd'])) AND $html_output['date'] < $minusfifty) {
      //put url for api access together
      $url = $base . $html_output['id'];
      //download json file
      $output = file_get_contents($url);
      //Convert json string into php array
      $data = json_decode($output, true);
      //save release_dates content in variable
      $release = $data["release_dates"];
      //set variable for later use
      $id = $html_output['id'];
      foreach ($release as $value) {
        switch ($value['type']) {
          case 'de-cine':
            $daterow = $value['date'];
            $conn->query("UPDATE `tbl_movie` SET `de_cine` = '$daterow', `date_rel` = '$datenullcomp' WHERE `id` = '$id'");
            break;
          case 'de-hd':
            $daterow = $value['date'];
            $conn->query("UPDATE `tbl_movie` SET `de_hd` = '$daterow', `date_rel` = '$datenullcomp' WHERE `id` = '$id'");
            break;
          case 'us-cine':
            $daterow = $value['date'];
            $conn->query("UPDATE `tbl_movie` SET `en_cine` = '$daterow', `date_rel` = '$datenullcomp' WHERE `id` = '$id'");
            break;
          case 'us-hd':
            $daterow = $value['date'];
            $conn->query("UPDATE `tbl_movie` SET `en_hd` = '$daterow', `date_rel` = '$datenullcomp' WHERE `id` = '$id'");
            break;
          default:
            break;
        }
      }
    }
  }
?>
