<?php
   //load sql_con.php file
   include 'sql_con.php';

  //Download json file and save it in a variable
  $url = "http://api.themoviedb.org/3/movie/upcoming?api_key=TMDb_API_KEY";
  $output = file_get_contents($url);

  //Convert json string into php array
  $data = json_decode($output, true);

  //Set variable
  $filter = "'";

 	//Loop for each entry
  	foreach($data['results'] as $item)
    {
        $genres = $item['genre_ids'];
    		//Extract the Array Values & filter variable filter
                  $id_u         	= $item['id'];
                  $id        	    = str_replace($filter, '',$id_u);
                  $title_u      	= $item['original_title'];
  		          $title        	= str_replace($filter, '',$title_u);
                  $rating_u         = $item['vote_average'];
                  $rating           = str_replace($filter, '',$rating_u);
                  if (empty($genres['0']))
                  {} else
                      {
                          $genre1_u          = $genres['0'];
                          $genre1           = str_replace($filter, '',$genre1_u);
                      }
                  if (empty($genres['1']))
                  {} else
                      {
                          $genre2_u          = $genres['1'];
                          $genre2           = str_replace($filter, '',$genre2_u);
                      }
                  if (empty($genres['2']))
                  {} else
                      {
                          $genre3_u         = $genres['2'];
                          $genre3           = str_replace($filter, '',$genre3_u);
                      }

                  // insert data in table
                  $sql = "INSERT IGNORE INTO tbl_movie(id, title, rating, genre1, genre2, genre3)
                        VALUES('$id', '$title', '$rating', '$genre1', '$genre2', '$genre3')";

                        // execute the sql command
                        $conn->exec($sql);
  	}
  ?>