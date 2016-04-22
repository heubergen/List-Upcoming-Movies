<?php
   //load sql_con.php file
   include 'sql_con.php';
   //select data from table tbl_set and save it in $row
   $stmt = $conn->prepare("SELECT UNIX_TIMESTAMP(last_api_date) FROM tbl_set");
   $stmt->execute();
   $row = $stmt->fetch();
   //convert $row to integer and save as $date
   $date = (int)($row) [0];
   //save todays midnight time in unix timestamp style in $today
   $today = strtotime('today midnight');
   if ($date == $today) {
   } else {
            //load all api files
            include 'api-calendar_upcoming.php';
            include 'api-rating.php';
            include 'api-release.php';
            //save todays date in database
            $sql = 'UPDATE `tbl_set` SET `last_api_date` = CURDATE() WHERE 1';
            $conn->exec($sql);
   }
   //close database connection
   $conn = null;
?>
