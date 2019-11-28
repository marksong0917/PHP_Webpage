<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Search Results</title>
</head>

<body>
  <?php
    require('db.php'); 
    //grab the search term from the user 
    $user_search = $_GET['usersearch']; 
    //covert search terms to a list with explode()
    $search_words = explode(' ', $user_search); 
    //build the first part of our query 
    $query = "SELECT * FROM database1 WHERE "; 
    //initialize the where variable 
    $where = ""; 
    //loop through and build the query 
    foreach($search_words as $word) {
      $where = $where. "title LIKE '%$word%' OR ";
    }
  
    $where = substr($where, 0, strlen($where)-4); 
  
    $final_sql = $query . $where; 
  
    //echo $final_sql; 
  
    $cmd = $conn->prepare($final_sql); 
    $cmd->execute(); 
  
    $results = $cmd->fetchAll(); 
  
    echo '<table> 
            <thread>
              <th> Email </th> 
              <th> Location </th> 
              <th> Skills </th> 
            </thread>
          </tbody>'; 

    foreach($results as $result) {
    echo '<tr><td>' . $result['Email'] . '</td>';
    echo '<td>' . $result['Location'] . '</td>';
    echo '<td>' . $result['Skills'] . '</td></tr>';

    

  }
  echo '</tbody></table>'; 
  
  $cmd->closeCursor(); 

  ?>
</body>
</html>