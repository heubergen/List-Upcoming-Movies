<?php
   //load sql_con.php file
   include 'sql_con.php';

  //Download json file and save it in a variable
  $url = "https://api.xrel.to/v2/calendar/upcoming.json?country=us";
  $output = file_get_contents($url);

  //Convert json string into php array
  $data = json_decode($output, true);

  //Set variable
  $filter = "'";

 	//Loop for each entry
  	foreach($data as $item)
    {
    		//Extract the Array Values & filter variable filter
                  $id_u         	= $item['id'];
                  $id        	    = str_replace($filter, '',$id_u);
                  $title_u      	= $item['title'];
  		          $title        	= str_replace($filter, '',$title_u);
                  $link_u           = $item['link_href'];
                  $link         	= str_replace($filter, '',$link_u);
                  $genre_u          = $item['genre'];
                  $genre        	= str_replace($filter, '',$genre_u);

                  // insert data in table
                  $sql = "INSERT IGNORE INTO tbl_movie(id, title, link_href, genre)
                        VALUES('$id', '$title', '$link', '$genre')";

                        // execute the sql command
                        $conn->exec($sql);
  	}
  ?>