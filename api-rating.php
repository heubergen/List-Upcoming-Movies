<?php
//load sql_con.php file
include 'sql_con.php';
//connect with database
$stmt = $conn->query("SELECT UNIX_TIMESTAMP(rating_date) AS date, rating, id FROM tbl_movie");
//unix timestamp -10 days
$minusten = strtotime('-10 days midnight');
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
    if (empty($html_output['date']) OR $html_output['date'] < $minusfifty OR (!isset($html_output['rating']) AND $html_output['date'] < $minusten)) {
      //put url for api access together
      $url = $base . $html_output['id'];
      //download json file
      $output = file_get_contents($url);
      //Convert json string into php array
      $data = json_decode($output, true);
      //prevent writing of Zero Rating in DB
      if (!empty($data['rating'])) {
        $rating = $data["rating"];
        $rating_r = round($rating, 0);
        $id     = $html_output["id"];
        //Write Rating in DB
        $conn->query("UPDATE `tbl_movie` SET `rating` = '$rating_r' WHERE `id`='$id'");
      }
      $id     = $html_output["id"];
      //Write Todays Date in DB
      $conn->query("UPDATE `tbl_movie` SET `rating_date` = '$datenullcomp' WHERE `id`='$id'");
    }
  }
?>
