<?php
   //load needed files
   include 'sql_con.php';
   include 'fn-p-genre-1.php';
   include 'fn-p-genre-2.php';
   include 'fn-p-genre-3.php';

   //select data from table tbl_movie and save it in $row
   $stmt = $conn->query("SELECT * FROM tbl_movie");

   //Set variable
   $filter = "'";
    //Loop for each entry
  	foreach($stmt as $item)
    {
        $id_u         	= $item['id'];
        $id        	    = str_replace($filter, '',$id_u);
        
        //Check if genre is not emtpy and is numeric, then extract the Array Values & filter variable filter
        if (is_numeric($item['genre1']))
        {   
            if (empty($item['genre1']))
            {} else
              {
                  $g1_u         	= $item['genre1'];
                  $g1        	    = str_replace($filter, '',$g1_u);
                  call_user_func('genre_trans_1', $g1, $id);
              }
        }
        else {}
        if (is_numeric($item['genre2']))
        {   
            if (empty($item['genre2']))
            {} else
              {
                  $g2_u         	= $item['genre2'];
                  $g2        	    = str_replace($filter, '',$g2_u);
                  call_user_func('genre_trans_2', $g2, $id);
              }
        }
        else {}
        if (is_numeric($item['genre3']))
        {   
            if (empty($item['genre3']))
            {} else
              {
                  $g3_u         	= $item['genre3'];
                  $g3        	    = str_replace($filter, '',$g3_u);
                  call_user_func('genre_trans_3', $g3, $id);
              }
        }
    }
   ?>